export class FormPost {
    constructor(idForm, idTextarea, idUlPost) {
        this.form = document.getElementById(idForm);
        this.textarea = document.getElementById(idTextarea);
        this.ulPost = document.getElementById(idUlPost);
        this.addSubmit();
    }

    onSubmit(func) { /* só add a função quando o evento for SUBMIT (fazer publicação)*/
        this.form.addEventListener('submit', func)
    }



    getTime() {
        const time = new Date();
        const hour = time.getHours();
        const minutes = time.getMinutes();
        return `${hour}h ${minutes}min`
    }

    addSubmit() {
        const handleSubmit = (event) => {
            event.preventDefault();
            if (this.textarea.value) {
                const time = this.getTime();

                const newPost = document.createElement('li');
                newPost.classList.add('post');
                newPost.innerHTML = `
                <div class="infoUserPost">
                        <div class="imgUserPost"></div>

                        <div class="nameAndHour">
                            <strong>Isabella Araujo</strong>
                            <p>${time}</p>
                        </div>
                    </div>
                    <p>
                        ${this.textarea.value}
                    </p>

                    <div class="actionBtnPost">
                        <button type="button" class="filesPost like"><img src="img/excl1.svg" alt="Curtir">Curtir</button>
                        <button type="button" class="filesPost comment"><img src="img/deslik1.svg" alt="Comentar">Comentar</button>
                        <button type="button" class="filesPost report"><img src="img/report.svg" alt="Denunciar">Denunciar</button>
                    </div>    
                `;

                this.ulPost.append(newPost);
                this.textarea.value = "";
            } else {
                alert('Verifique o campo digitado.')
            }
        }
        this.onSubmit(handleSubmit)
    }

}

const postForm = new FormPost('formPost', 'textarea', 'posts')