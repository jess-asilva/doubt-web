document.addEventListener('DOMContentLoaded', function () {
    const especieForm = document.getElementById('calendar-form');
    const especieList = document.getElementById('calendar-list');

    especieForm.addEventListener('submit', function (e) {
        e.preventDefault();
        addCalendar();
    });

    function addCalendar() {
        const titleInput = document.getElementById('title');
        const turmaInput = document.getElementById('turma');
        const descriptionInput = document.getElementById('description');
        const imageInput = document.getElementById('image');

        const title = titleInput.value;
        const turma = turmaInput.value;
        const description = descriptionInput.value;
        const image = imageInput.files[0];

        const reader = new FileReader();
        reader.onload = function () {
            const calendarItem = createCalendarItem(title, turma, description, reader.result);
            especieList.appendChild(calendarItem);

            titleInput.value = '';
            turmaInput.value = '';
            descriptionInput.value = '';
            imageInput.value = '';
        };
        reader.readAsDataURL(image);
    }

    function createCalendarItem(title, turma, description, imageSrc) {
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

        const nameTurma = document.createElement('p');
        nameTurma.textContent = `Nome: ${turma}`;
        calendarDetails.appendChild(nameTurma);

        const calendarDescription = document.createElement('p');
        calendarDescription.textContent = `Descrição: ${description}`;
        calendarDetails.appendChild(calendarDescription);

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