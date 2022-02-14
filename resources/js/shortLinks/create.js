(() => {
    const createForm = document.getElementById('create-form');
    const output = createForm.querySelector('[data-output]');

    createForm.addEventListener('submit', (evt) => {
        evt.preventDefault();

        axios.post('/api/shortLinks', new FormData(createForm))
            .then((response) => {
                const url = response.headers['x-short-link'];

                output.classList.remove('create-form__output_error');
                output.classList.add('create-form__output_success');
                output.innerHTML =
                    `Result: <a class="create-form__link" href="${url}" target="_blank">${url}</a>`;
                createForm.reset();
            }).catch((error) => {
                output.classList.remove('create-form__output_success');
                output.classList.add('create-form__output_error');
                output.innerHTML =
                    `Error: ${error.response.data.message}`;
            });
    });
})();
