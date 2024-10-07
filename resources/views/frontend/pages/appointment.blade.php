@extends('frontend.master')
@section('content')
    <style>
        .radio-label {
            display: inline-block;
            background: #738093;
            cursor: pointer;
            width: 85%;
            padding: 8px;
            position: relative;
            top: -2px;
        }
    </style>
    <section>
        <img class="img-fluid w-100" style="height: 330px; object-fit: cover;"
            src="https://library.gmit.ie/wp-content/uploads/2022/08/Book-appointment.png" alt="Book Appointment" />
    </section>

    <section class="py-5"
    style="background-color: #eee"
        {{-- style="background: url('https://t4.ftcdn.net/jpg/06/01/61/21/360_F_601612151_5bNQV6jrBHorhew1E19rVzZg87Cx5Tgr.jpg') no-repeat center center / cover;" --}} >
        <form action="" method="post">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="mb-5 text-center fw-bold">Book Appointment</h1>
                    </div>
                    <div class="col-lg-6">
                        <div class="container">
                            <div class="calendar bg-white rounded-2 py-5">
                                <header class="d-flex justify-content-center align-items-center">
                                    <pre class="left">◀</pre>
                                    <div class="header-display">
                                        <p class="display"></p>
                                    </div>
                                    <pre class="right">▶</pre>
                                </header>

                                <div class="week">
                                    <div>Su</div>
                                    <div>Mo</div>
                                    <div>Tu</div>
                                    <div>We</div>
                                    <div>Th</div>
                                    <div>Fr</div>
                                    <div>Sa</div>
                                </div>
                                <div class="days"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h6 class="fw-bold">All Available Slots</h6>
                        <div class="display-selected selected-slots">
                            <p class="selected"></p>
                        </div>
                        <h6 class="mt-3">Time Slots:</h6>
                        <div class="time-slots">
                            <div class="slots"></div> <!-- This is where time slots as radio buttons will display -->
                        </div>
                        <div class="row gx-2">
                            <div class="col-lg-12 mb-2">
                                <div class="bg-white p-2">
                                    <label for="exampleFormControlInput1" class="form-label bg-transparent">Name</label>
                                    <input type="email" class="form-control bg-light border-0 fs-6"
                                        id="exampleFormControlInput1" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bg-white p-2">
                                    <label for="exampleFormControlInput1" class="form-label bg-transparent">Email</label>
                                    <input type="email" class="form-control bg-light border-0 fs-6"
                                        id="exampleFormControlInput1" placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="bg-white p-2">
                                    <label for="exampleFormControlInput1" class="form-label bg-transparent">Phone</label>
                                    <input type="email" class="form-control bg-light border-0 fs-6"
                                        id="exampleFormControlInput1" placeholder="Enter Your Phone">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <button type="submit" class="animated-button1">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Registraion
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection

@push('scripts')
    <script>
        let display = document.querySelector(".display");
        let days = document.querySelector(".days");
        let previous = document.querySelector(".left");
        let next = document.querySelector(".right");
        let selected = document.querySelector(".selected");

        let date = new Date();
        let year = date.getFullYear();
        let month = date.getMonth();

        // Available slots for specific dates
        const availableSlots = {
            "2024-10-19": ["01:00 PM", "02:00 PM", "03:00 PM", "11:00 PM"],
            "2024-10-20": ["01:00 PM", "02:00 PM", "03:00 PM", "09:00 PM"],
            "2024-10-21": ["01:00 PM", "02:00 PM", "03:00 PM", "07:00 PM"],
            "2024-10-22": ["01:00 PM", "02:00 PM", "03:00 PM", "04:00 PM"],
        };

        function displayCalendar() {
            const firstDay = new Date(year, month, 1);
            const lastDay = new Date(year, month + 1, 0);
            const firstDayIndex = firstDay.getDay();
            const numberOfDays = lastDay.getDate();

            let formattedDate = firstDay.toLocaleString("en-US", {
                month: "long",
                year: "numeric"
            });

            display.innerHTML = `${formattedDate}`;
            days.innerHTML = ""; // Clear previous days before appending new ones

            // Add empty divs for the previous month's last days
            for (let x = 1; x <= firstDayIndex; x++) {
                const div = document.createElement("div");
                days.appendChild(div);
            }

            // Add the actual days of the month
            for (let i = 1; i <= numberOfDays; i++) {
                let div = document.createElement("div");
                let currentDate = new Date(year, month, i);
                let formattedCurrentDate = currentDate.toISOString().split('T')[0]; // Format to 'YYYY-MM-DD'
                div.dataset.date = formattedCurrentDate; // Use the formatted date

                div.innerHTML = i;

                // Highlight the current date
                if (
                    currentDate.getFullYear() === new Date().getFullYear() &&
                    currentDate.getMonth() === new Date().getMonth() &&
                    currentDate.getDate() === new Date().getDate()
                ) {
                    div.classList.add("current-date");
                }

                days.appendChild(div);
            }

            // Call displaySelected to bind click event listeners to the newly generated days
            displaySelected();
        }

        function displaySelected() {
            const dayElements = document.querySelectorAll(".days div");
            dayElements.forEach((day) => {
                day.addEventListener("click", () => {
                    // Clear previously selected date
                    dayElements.forEach((d) => d.classList.remove("selected-date"));
                    day.classList.add("selected-date");

                    const selectedDate = day.dataset.date; // Get the selected date
                    console.log("Selected Date: ", selectedDate); // Log selected date

                    // Show the selected date
                    selected.innerHTML =
                        `Selected Date: ${selectedDate}`; // Update the selected date display

                    // Get available slots for the selected date
                    const slots = availableSlots[selectedDate]; // Get slots for the selected date

                    // Clear previous slots
                    const slotsContainer = document.querySelector(".slots");
                    slotsContainer.innerHTML = ""; // Clear previous slots

                    // Check if slots exist for the selected date
                    if (slots && slots.length > 0) {
                        // Split slots into two columns
                        const midIndex = Math.ceil(slots.length / 2);
                        const firstColumnSlots = slots.slice(0, midIndex);
                        const secondColumnSlots = slots.slice(midIndex);

                        // Create two columns for the slots
                        const firstColumn = document.createElement("div");
                        const secondColumn = document.createElement("div");
                        firstColumn.className = "columns";
                        secondColumn.className = "columns";

                        // Populate the first column
                        firstColumnSlots.forEach(slot => {
                            const radioHtml = `
                        <div class="radio-btns">
                            <input type="radio" id="${slot}" name="timeSlot" value="${slot}">
                            <label class="radio-label" for="${slot}">${slot}</label>
                        </div>
                    `;
                            firstColumn.innerHTML +=
                                radioHtml; // Append each radio button to the first column
                        });

                        // Populate the second column
                        secondColumnSlots.forEach(slot => {
                            const radioHtml = `
                        <div class="radio-btns">
                            <input type="radio" id="${slot}" name="timeSlot" value="${slot}">
                            <label class="radio-label" for="${slot}">${slot}</label>
                        </div>
                    `;
                            secondColumn.innerHTML +=
                                radioHtml; // Append each radio button to the second column
                        });

                        // Append columns to the slots container
                        slotsContainer.appendChild(firstColumn);
                        slotsContainer.appendChild(secondColumn);
                    } else {
                        slotsContainer.innerHTML =
                            "No slots available"; // Show a message if no slots are available
                    }
                });
            });
        }


        previous.addEventListener("click", () => {
            if (month === 0) {
                month = 11; // Go to December
                year -= 1; // Decrease the year
            } else {
                month -= 1; // Go to the previous month
            }
            displayCalendar(); // Call to update the calendar display
        });

        next.addEventListener("click", () => {
            if (month === 11) {
                month = 0; // Go to January
                year += 1; // Increase the year
            } else {
                month += 1; // Go to the next month
            }
            displayCalendar(); // Call to update the calendar display
        });

        // Initial call to display the calendar
        displayCalendar();
    </script>
@endpush
