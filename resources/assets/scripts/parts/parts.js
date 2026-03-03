export class Parts {

    init() {

        this.initDatePicker();
    }

    initDatePicker() {
        document.querySelectorAll(".date-picker").forEach(input => {
            if (!input._flatpickr) {
                flatpickr(input, {
                    dateFormat: "Y-m-d",
                    minDate: "today",
                    disableMobile: true
                });
            }
        });
    }

}
