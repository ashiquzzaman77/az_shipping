<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\LengthAwarePaginator;

class LogController extends Controller
{
    private $logPath;

    public function __construct()
    {
        $this->logPath = storage_path('logs');
        $this->middleware('permission:view log|show log|delete log|download log')->only(['index', 'show', 'destroy', 'download']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logs = collect(File::files($this->logPath))->map(function ($item) {
            return [
                'id' => md5($item->getFilename()), // Unique identifier
                'name' => $item->getFilename(),
                'last_modified' => Carbon::createFromTimestamp($item->getMTime())->diffForHumans(),
                'size' => number_format($item->getSize() / 1024, 2) . ' KB',
                'date' => Carbon::createFromTimestamp($item->getMTime())->toDateTimeString()
            ];
        });
        return view('admin.pages.logs.index', ['logs' => $logs]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $files = File::files($this->logPath);
        $file = collect($files)->first(function ($file) use ($id) {
            return md5($file->getFilename()) == $id;
        });

        if ($file === null) {
            abort(404, 'Log file not found.');
        }

        $fileContent = File::get($file->getPathname());
        $lines = collect(explode("\n", $fileContent));
        $chunks = $lines->chunk(10);

        $page = Paginator::resolveCurrentPage() ?: 1;
        $items = $chunks->slice(($page - 1) * 10, 10)->all();
        $chunks = new LengthAwarePaginator($items, count($chunks), 10, $page, [
            'path' => Paginator::resolveCurrentPath(),
        ]);

        return view('admin.pages.logs.show', ['chunks' => $chunks, 'id' => $id]);
    }

    public function download($id)
    {
        return response()->download($this->logPath . '/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $files = File::files($this->logPath);
        foreach ($files as $file) {
            if (md5($file->getFilename()) == $id) {
                // Delete the file
                File::delete($file->getPathname());
                break;
            }
        }
    }
}
