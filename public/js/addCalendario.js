document.addEventListener('DOMContentLoaded', function () {
    const especieForm = document.getElementById('calendar-form');
    const especieList = document.getElementById('calendar-list');

    especieForm.addEventListener('submit', function (e) {
        e.preventDefault();
        addCalendar();
    });

    function addCalendar() {
        const titleInput = document.getElementById('title');
        const imageInput = document.getElementById('image');

        const title = titleInput.value;
        const image = imageInput.files[0];

        const reader = new FileReader();
        reader.onload = function () {
            const calendarItem = createCalendarItem(title, reader.result);
            especieList.appendChild(calendarItem);

            titleInput.value = '';
            imageInput.value = '';
        };
        reader.readAsDataURL(image);
    }

    function createCalendarItem(title, imageSrc) {
        const calendarItem = document.createElement('li');
        calendarItem.classList.add('calendar-item');

        const calendarImage = document.createElement('img');
        calendarImage.src = imageSrc;
        calendarImage.alt = title;
        calendarItem.appendChild(calendarImage);

        const calendarDetails = document.createElement('div');
        calendarDetails.classList.add('calendar-details');

        const calendarTitle = document.createElement('h3');
        calendarTitle.textContent = title;
        calendarDetails.appendChild(calendarTitle);

        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Excluir';
        deleteButton.classList.add('delete-button');
        deleteButton.addEventListener('click', function () {
            deleteCalendar(calendarItem);
        });
        calendarDetails.appendChild(deleteButton);

        calendarItem.appendChild(calendarDetails);

        return calendarItem;
    }

});