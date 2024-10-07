<?php

/**
 * Sends a success response.
 *
 * @param mixed $data The data to send in the response.
 * @param string $message The success message.
 * @param int $code The HTTP status code.
 * @return \Illuminate\Http\JsonResponse The success response.
 */
if (!function_exists('sendSuccessResponse')) {
    function sendSuccessResponse($data, $message = 'Data Retrieved Successfully', $code = 200)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'data' => $data
        ], $code);
    }
}

/**
 * Sends an error response.
 *
 * @param mixed $data The data to send in the response.
 * @param string $message The error message.
 * @param int $code The HTTP status code.
 * @return \Illuminate\Http\JsonResponse The error response.
 */
if (!function_exists('sendErrorResponse')) {
    function sendErrorResponse($data, $message = 'Something went wrong', $code = 500)
    {
        return response()->json([
            'success' => false,
            'message' => $message,   
            'data' => $data
        ], $code);
    }
}
