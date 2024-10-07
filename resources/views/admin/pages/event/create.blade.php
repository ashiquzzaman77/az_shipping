<x-admin-app-layout :title="'Event Create'">
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

            <form id="myForm" method="post" action="{{ route('admin.event.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Event Name</label>
                                <input type="text" name="event_name" placeholder="Event Name"
                                    class="form-control form-control-sm" value="{{ old('event_name') }}">
                            </div>
                        </div>

                        <div class="col-2 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Start Date</label>
                                <input type="date" name="start_date" placeholder="Start Date"
                                    class="form-control form-control-sm" value="{{ old('start_date') }}">
                            </div>
                        </div>

                        <div class="col-2 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Start Time</label>
                                <input type="time" name="start_time" placeholder="Start Time"
                                    class="form-control form-control-sm" value="{{ old('start_time') }}">
                            </div>
                        </div>

                        <div class="col-2 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">End Date</label>
                                <input type="date" name="end_date" placeholder="End Date"
                                    class="form-control form-control-sm" value="{{ old('end_date') }}">
                            </div>
                        </div>

                        <div class="col-2 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">End Time</label>
                                <input type="time" name="end_time" placeholder="End Time"
                                    class="form-control form-control-sm" value="{{ old('end_time') }}">
                            </div>
                        </div>

                        <!-- Short Descp -->
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="event_short_descp" class="mb-2">Event Short Descp</label>
                                <textarea name="event_short_descp" placeholder="Event Short Description" class="form-control form-control-sm" cols="3" rows="3">{{ old('event_short_descp') }}</textarea>
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Max Attendcess</label>
                                <input type="number" name="max_attendees" placeholder="Max Attendcess"
                                    class="form-control form-control-sm" value="{{ old('max_attendees') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Current Attendcess</label>
                                <input type="number" name="current_attendees" placeholder="Current Attendcess"
                                    class="form-control form-control-sm" value="{{ old('current_attendees') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Banner Badge</label>
                                <input type="text" name="banner_badge" placeholder="Banner Badge"
                                    class="form-control form-control-sm" value="{{ old('banner_badge') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Banner Title</label>
                                <input type="text" name="banner_title" placeholder="Banner Title"
                                    class="form-control form-control-sm" value="{{ old('banner_title') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Banner Sub Title</label>
                                <input type="text" name="banner_sub_title" placeholder="Banner Sub Title"
                                    class="form-control form-control-sm" value="{{ old('banner_sub_title') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Organizer Text</label>
                                <input type="text" name="organizer_text" placeholder=""
                                    class="form-control form-control-sm" value="{{ old('organizer_text') }}">
                            </div>
                        </div>


                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Website Link</label>
                                <input type="text" name="website_link" placeholder=""
                                    class="form-control form-control-sm" value="{{ old('website_link') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Whatup Link</label>
                                <input type="text" name="whatsapp_link" placeholder=""
                                    class="form-control form-control-sm" value="{{ old('whatsapp_link') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Other Link</label>
                                <input type="text" name="other_link" placeholder=""
                                    class="form-control form-control-sm" value="{{ old('other_link') }}">
                            </div>
                        </div>

                        <div class="col-5 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row One Title</label>
                                <input type="text" name="row_one_title" placeholder=""
                                    class="form-control form-control-sm" value="{{ old('row_one_title') }}">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row One Description</label>
                                <textarea name="row_one_description" class="form-control editor" id="" cols="3" rows="3"></textarea>
                            </div>
                        </div>


                        <div class="col-5 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Two Title</label>
                                <input type="text" name="row_two_title" placeholder=""
                                    class="form-control form-control-sm" value="{{ old('row_two_title') }}">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Two Description</label>
                                <textarea name="row_two_description" class="form-control editor" id="" cols="3" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Badge</label>
                                <input type="text" name="row_three_badge" placeholder="Row Three Badge"
                                    class="form-control form-control-sm" value="{{ old('row_three_badge') }}">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Title</label>
                                <input type="text" name="row_three_title" placeholder="Row Three Title"
                                    class="form-control form-control-sm" value="{{ old('row_three_title') }}">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Description</label>
                                <textarea name="row_three_description" class="form-control editor" id="" cols="3" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Map Link</label>
                                <textarea name="map_link" class="form-control form-control-sm" id="" cols="3" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Location</label>
                                <input type="text" name="location" placeholder="Location"
                                    class="form-control form-control-sm" value="{{ old('location') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Contact</label>
                                <input type="number" name="contact" placeholder="contact"
                                    class="form-control form-control-sm" value="{{ old('contact') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Status</label>
                                <select name="status" class="form-select form-select-sm" id="">
                                    <option selected disabled>Choose Status</option>
                                    <option value="canceled">Canceled</option>
                                    <option value="ongoing">Ongoing</option>
                                    <option value="upcoming">Upcoming</option>
                                    <option value="completed">Completed</option>
                                    <option value="registration_open">Registration Open</option>
                                    <option value="registration_close">Registration Close</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Event Type</label>
                                <select name="event_type" class="form-select form-select-sm" id="">
                                    <option selected disabled>Choose Event Type</option>
                                    <option value="workshop">workshop</option>
                                    <option value="seminar">seminar</option>
                                    <option value="concert">concert</option>
                                    <option value="conference">conference</option>
                                    <option value="webinar">webinar</option>
                                </select>
                            </div>
                        </div>
                        

                        <div class="col-3 mb-3">
                            <div class="">
                                <label for="" class="mb-2">Row One Image</label>
                                <input type="file" name="row_one_image" accept="image/*"
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="">
                                <label for="" class="mb-2">Banner Image</label>
                                <input type="file" name="banner_image" accept="image/*"
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-12 mb-3 mt-4">
                            <button type="submit"
                                class="btn btn-primary rounded-0 px-5 btn-sm float-end">Submit</button>
                        </div>

                    </div>
                </div>

            </form>

        </div>

    </div>


</x-admin-app-layout>
