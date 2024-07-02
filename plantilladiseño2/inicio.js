      function validateForm() {
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const username = document.getElementById("username").value;

        if (name === "" || username === "") {
          alert("Por favor, complete todos los campos");
          return false;
        }

        if (!validateEmail(email)) {
          alert("El formato de correro elctronico es incorrecto");
          return false;
        }

        return true;
      }

      function validateEmail(email) {
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailRegex.test(email);
      }