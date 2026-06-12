import {formatDateForInput, formatTimeForInput} from  './helpers/standard-date-time.js'

document.addEventListener('DOMContentLoaded', () => {
    const today = new Date();


    const dateElement = document.getElementById('date');
    const timeElement = document.getElementById('time');

    if(!dateElement || !timeElement) {
        return;
    }

    dateElement.value = formatDateForInput(today);
    timeElement.value = formatTimeForInput(today);
})


