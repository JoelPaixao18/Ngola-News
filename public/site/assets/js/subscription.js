document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("subscribeForm");
    const messageBox = document.getElementById("subscribeMessage");
    const popup = document.querySelector(".popup-subscribe-area");

    if (form) {
        form.addEventListener("submit", async function (e) {
            e.preventDefault();

            let url = form.dataset.action;
            let formData = new FormData(form);

            try {
                let response = await fetch(url, {
                    method: "POST",
                    credentials: "same-origin", // 🔥 importante para gravar cookie
                    body: formData
                });

                let data = await response.json();

                if (data.success) {
                    messageBox.innerHTML = `<span style="color: green">${data.message}</span>`;

                    // 🔥 Fecha o modal logo após a subscrição
                    setTimeout(() => {
                        if (popup) {
                            popup.style.display = "none";
                        }
                    }, 1500); // espera 1,5s para o usuário ver a mensagem
                } else {
                    messageBox.innerHTML = `<span style="color: red">${data.message}</span>`;
                }
            } catch (error) {
                console.error("Erro:", error);
                messageBox.innerHTML = `<span style="color: red">Ocorreu um erro, tente novamente.</span>`;
            }
        });
    }
});
