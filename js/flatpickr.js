//flatpickr//

let minDate = new Date();
minDate = minDate.setDate(minDate.getDate() + 1);
let maxDate = new Date();
maxDate = maxDate.setMonth(maxDate.getMonth() + 3);
flatpickr('#js-flatpickr', {
    locale: 'ja',
    minDate: minDate,
    maxDate: maxDate,
    mode: "single",
    altInput: true,
    altFormat: 'Y年m月d日',
    dateFormat: 'Y-m-d'
});
