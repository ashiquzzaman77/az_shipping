<x-admin-app-layout :title="'Event Update'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.event.index') }}" class="btn btn-light-primary rounded-2">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                    </span> Back to list
                </a>

            </div>
        </div>
        <div class="card-body">

            <form id="myForm" method="post" action="{{ route('admin.event.update', $item->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card bg-light">

                    <div class="row p-4">
                        <!-- Event Name -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="event_name" class="mb-2">Event Name</label>
                                <input type="text" name="event_name" placeholder="Event Name"
                                    class="form-control form-control-sm"
                                    value="{{ old('event_name', $item->event_name) }}">
                            </div>
                        </div>

                        <!-- Start Date -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="start_date" class="mb-2">Start Date</label>
                                <input type="date" name="start_date" class="form-control form-control-sm"
                                    value="{{ old('start_date', $item->start_date) }}">
                            </div>
                        </div>

                        <!-- Start Time -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="start_time" class="mb-2">Start Time</label>
                                <input type="time" name="start_time" class="form-control form-control-sm"
                                    value="{{ old('start_time', $item->start_time) }}">
                            </div>
                        </div>

                        <!-- End Date -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="end_date" class="mb-2">End Date</label>
                                <input type="date" name="end_date" class="form-control form-control-sm"
                                    value="{{ old('end_date', $item->end_date) }}">
                            </div>
                        </div>

                        <!-- End Date -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="end_time" class="mb-2">End Time</label>
                                <input type="time" name="end_time" class="form-control form-control-sm"
                                    value="{{ old('end_time', $item->end_time) }}">
                            </div>
                        </div>

                        <!-- Short Descp -->
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="event_short_descp" class="mb-2">Event Short Descp</label>
                                <textarea name="event_short_descp" class="form-control form-control-sm" cols="3" rows="3">{{ old('event_short_descp', $item->event_short_descp) }}</textarea>
                            </div>
                        </div>

                        <!-- Max Attendees -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="max_attendees" class="mb-2">Max Attendees</label>
                                <input type="number" name="max_attendees" placeholder="Max Attendees"
                                    class="form-control form-control-sm"
                                    value="{{ old('max_attendees', $item->max_attendees) }}">
                            </div>
                        </div>

                        <!-- Current Attendees -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="current_attendees" class="mb-2">Current Attendees</label>
                                <input type="number" name="current_attendees" placeholder="Current Attendees"
                                    class="form-control form-control-sm"
                                    value="{{ old('current_attendees', $item->current_attendees) }}">
                            </div>
                        </div>

                        <!-- Banner Badge -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="banner_badge" class="mb-2">Banner Badge</label>
                                <input type="text" name="banner_badge" placeholder="Banner Badge"
                                    class="form-control form-control-sm"
                                    value="{{ old('banner_badge', $item->banner_badge) }}">
                            </div>
                        </div>

                        <!-- Banner Title -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="banner_title" class="mb-2">Banner Title</label>
                                <input type="text" name="banner_title" placeholder="Banner Title"
                                    class="form-control form-control-sm"
                                    value="{{ old('banner_title', $item->banner_title) }}">
                            </div>
                        </div>

                        <!-- Banner Sub Title -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="banner_sub_title" class="mb-2">Banner Sub Title</label>
                                <input type="text" name="banner_sub_title" placeholder="Banner Sub Title"
                                    class="form-control form-control-sm"
                                    value="{{ old('banner_sub_title', $item->banner_sub_title) }}">
                            </div>
                        </div>

                        <!-- Organizer Text -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="organizer_text" class="mb-2">Organizer Text</label>
                                <input type="text" name="organizer_text" placeholder="Organizer Text"
                                    class="form-control form-control-sm"
                                    value="{{ old('organizer_text', $item->organizer_text) }}">
                            </div>
                        </div>

                        <!-- Website Link -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="website_link" class="mb-2">Website Link</label>
                                <input type="text" name="website_link" placeholder="Website Link"
                                    class="form-control form-control-sm"
                                    value="{{ old('website_link', $item->website_link) }}">
                            </div>
                        </div>

                        <!-- WhatsApp Link -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="whatsapp_link" class="mb-2">WhatsApp Link</label>
                                <input type="text" name="whatsapp_link" placeholder="WhatsApp Link"
                                    class="form-control form-control-sm"
                                    value="{{ old('whatsapp_link', $item->whatsapp_link) }}">
                            </div>
                        </div>

                        <!-- Other Link -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="other_link" class="mb-2">Other Link</label>
                                <input type="text" name="other_link" placeholder="Other Link"
                                    class="form-control form-control-sm"
                                    value="{{ old('other_link', $item->other_link) }}">
                            </div>
                        </div>

                        <!-- Row One Title -->
                        <div class="col-5 mb-3">
                            <div class="form-group">
                                <label for="row_one_title" class="mb-2">Row One Title</label>
                                <input type="text" name="row_one_title" placeholder="Row One Title"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_one_title', $item->row_one_title) }}">
                            </div>
                        </div>

                        <!-- Row One Description -->
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="row_one_description" class="mb-2">Row One Description</label>
                                <textarea name="row_one_description" class="form-control editor" cols="3" rows="3">{{ old('row_one_description', $item->row_one_description) }}</textarea>
                            </div>
                        </div>

                        <!-- Row Two Title -->
                        <div class="col-5 mb-3">
                            <div class="form-group">
                                <label for="row_two_title" class="mb-2">Row Two Title</label>
                                <input type="text" name="row_two_title" placeholder="Row Two Title"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_two_title', $item->row_two_title) }}">
                            </div>
                        </div>

                        <!-- Row Two Description -->
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="row_two_description" class="mb-2">Row Two Description</label>
                                <textarea name="row_two_description" class="form-control editor" cols="3" rows="3">{{ old('row_two_description', $item->row_two_description) }}</textarea>
                            </div>
                        </div>

                        <!-- Row Three Badge -->
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="row_three_badge" class="mb-2">Row Three Badge</label>
                                <input type="text" name="row_three_badge" placeholder="Row Three Badge"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_three_badge', $item->row_three_badge) }}">
                            </div>
                        </div>

                        <!-- Row Three Title -->
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="row_three_title" class="mb-2">Row Three Title</label>
                                <input type="text" name="row_three_title" placeholder="Row Three Title"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_three_title', $item->row_three_title) }}">
                            </div>
                        </div>

                        <!-- Row Three Description -->
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="row_three_description" class="mb-2">Row Three Description</label>
                                <textarea name="row_three_description" class="form-control editor" cols="3" rows="3">{{ old('row_three_description', $item->row_three_description) }}</textarea>
                            </div>
                        </div>

                        <!-- Map Link -->
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="map_link" class="mb-2">Map Link</label>
                                <textarea name="map_link" class="form-control form-control-sm" cols="3" rows="3">{{ old('map_link', $item->map_link) }}</textarea>
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Location</label>
                                <input type="text" name="location" placeholder="Location"
                                    class="form-control form-control-sm" value="{{ old('location',$item->location) }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Contact</label>
                                <input type="number" name="contact" placeholder="contact"
                                    class="form-control form-control-sm" value="{{ old('contact',$item->contact) }}">
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="status" class="mb-2">Status</label>
                                <select name="status" class="form-select form-select-sm">
                                    <option value="" disabled
                                        {{ !old('status', $item->status) ? 'selected' : '' }}>Choose Status</option>
                                    @foreach (['canceled', 'ongoing', 'upcoming', 'completed', 'registration_open', 'registration_close'] as $status)
                                        <option value="{{ $status }}"
                                            {{ old('status', $item->status) == $status ? 'selected' : '' }}>
                                            {{ ucfirst($status) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Event Type -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="event_type" class="mb-2">Event Type</label>
                                <select name="event_type" class="form-select form-select-sm">
                                    <option value="" disabled
                                        {{ !old('event_type', $item->event_type) ? 'selected' : '' }}>Choose Event Type
                                    </option>
                                    @foreach (['workshop', 'seminar', 'concert', 'conference', 'webinar'] as $eventType)
                                        <option value="{{ $eventType }}"
                                            {{ old('event_type', $item->event_type) == $eventType ? 'selected' : '' }}>
                                            {{ ucfirst($eventType) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Row One Image -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="row_one_image" class="mb-2">Row One Image</label>
                                <input type="file" name="row_one_image" accept="image/*"
                                    class="form-control form-control-sm mb-2">
                                @if ($item->row_one_image)
                                    <img src="{{ !empty($item->row_one_image) ? url('storage/event/' . $item->row_one_image) : 'https://ui-avatars.com/api/?name=' . urlencode($item->banner_title) }}"
                                        alt="Row One Image" style="width: 80px; height: 80px;">
                                @endif
                            </div>
                        </div>

                        <!-- Banner Image -->
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="banner_image" class="mb-2">Banner Image</label>
                                <input type="file" name="banner_image" accept="image/*"
                                    class="form-control form-control-sm mb-2">
                                @if ($item->banner_image)
                                    <img src="{{ !empty($item->banner_image) ? url('storage/event/' . $item->banner_image) : 'https://ui-avatars.com/api/?name=' . urlencode($item->banner_title) }}"
                                        alt="Banner Image" style="width: 80px; height: 80px;">
                                @endif
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 mb-3 mt-4">
                            <button type="submit"
                                class="btn btn-primary rounded-0 px-5 btn-sm float-end">Update</button>
                        </div>
                    </div>


                </div>

            </form>

        </div>

    </div>


</x-admin-app-layout>
