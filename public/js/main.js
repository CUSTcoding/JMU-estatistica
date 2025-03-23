document.addEventListener("DOMContentLoaded", function () {
    const forms = document.querySelectorAll(".formulario"); // Seleciona todas as etapas do formulário
    let currentStep = 0; // Começa na primeira etapa
  
    const next01 = document.getElementById("next01");
    const next02 = document.getElementById("next02");
    const next03 = document.getElementById("next03");
    const next04 = document.getElementById("next04");
    const next05 = document.getElementById("next05");
    const next06 = document.getElementById("next06");
    const next07 = document.getElementById("next07");
  
    const prev01 = document.getElementById("prev01");
    const prev02 = document.getElementById("prev02");
    const prev03 = document.getElementById("prev03");
    const prev04 = document.getElementById("prev04");
    const prev05 = document.getElementById("prev05");
    const prev06 = document.getElementById("prev06");
    const prev07 = document.getElementById("prev07");

  
    const left = document.getElementById("left");
    const rigth = document.getElementById("rigth");
  
    const lesftright = [
      next01,
      next03,
      next05,
      next07,
      prev02,
      prev04,
      prev06,
    ];
  
    const rigthleft = [
      next02,
      next04,
      next06,
      prev01,
      prev03,
      prev05,
      prev07,
    ];
    
    ////////////////////////////////////////////
  
    function moveClass(removeFrom, addTo) {
      removeFrom.classList.remove("active01");
      setTimeout(() => {
          addTo.classList.add("active01");
      }, 1000); // Um segundo de delay
    }
  
    lesftright.forEach(button => {
      button.addEventListener("click", () => moveClass(left, rigth));
    });
  
    rigthleft.forEach(button => {
      button.addEventListener("click", () => moveClass(rigth, left));
    });
  
    ////////////////////////////////////////////
  
    function toggleInteraction(buttonGroup) {
      const container = document.querySelector('.container');
      buttonGroup.forEach(button => {
        button.addEventListener('click', function() {
          container.classList.toggle('mode-right');
  
          if (buttonGroup === lesftright) {
            const leftModeElement = document.querySelector('.leftmode');
            const rightModeElement = document.querySelector('.rightmode');
            
            if (container.classList.contains('mode-right')) {
              if (leftModeElement) leftModeElement.classList.add('pointer-events-none');
              if (rightModeElement) rightModeElement.classList.remove('pointer-events-none');
            } else {
              if (rightModeElement) rightModeElement.classList.add('pointer-events-none');
              if (leftModeElement) leftModeElement.classList.remove('pointer-events-none');
            }
          } else if (buttonGroup === rigthleft) {
            const leftModeElement = document.querySelector('.leftmode');
            const rightModeElement = document.querySelector('.rightmode');
            
            if (container.classList.contains('mode-right')) {
              if (rightModeElement) rightModeElement.classList.add('pointer-events-none');
              if (leftModeElement) leftModeElement.classList.remove('pointer-events-none');
            } else {
              if (leftModeElement) leftModeElement.classList.add('pointer-events-none');
              if (rightModeElement) rightModeElement.classList.remove('pointer-events-none');
            }
          }
        });
      });
    }
  
    toggleInteraction(lesftright);
    toggleInteraction(rigthleft);
  
      // Seleciona os elementos do campo "cargo"
      const radioCargoSim = document.querySelector('input[name="cargo"][value="Sim"]');
      const radioCargoNao = document.querySelector('input[name="cargo"][value="Não"]');
      const inputCargo = document.querySelector('input[placeholder="Digite seu cargo aqui"]');
  
      // Função para mostrar a etapa atual do formulário
      function showStep(step) {
        forms.forEach((form, index) => {
          form.classList.toggle("d-none", index !== step); // Mostra a etapa atual e esconde as outras
        });
      }
  
      // Evento para tornar o campo "cargo" obrigatório apenas se "Sim" for selecionado
      document.querySelectorAll('input[name="cargo"]').forEach((radio) => {
        radio.addEventListener("change", function () {
          if (radioCargoSim.checked) {
            inputCargo.setAttribute("required", "required");
            inputCargo.classList.add("border", "border-warning"); // Adiciona um destaque visual
          } else {
            inputCargo.removeAttribute("required");
            inputCargo.classList.remove("border", "border-warning"); // Remove o destaque
          }
        });
      });
  
      // Evento para o botão "next" (Avançar etapa SEM validação)
      document.querySelectorAll(".next").forEach((btn) => {
        btn.addEventListener("click", function () {
          if (currentStep < forms.length - 1) {
            currentStep++;
            showStep(currentStep);
          }
        });
      });
  
      // Evento para o botão "prev" (Voltar etapa)
      document.querySelectorAll(".prev").forEach((btn) => {
        btn.addEventListener("click", function () {
          if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
          }
        });
      });
  
      // Função para validar os campos obrigatórios apenas no botão "Enviar"
      function validateFields(form) {
        let isValid = true;
        const requiredFields = form.querySelectorAll("input[required], textarea[required], select[required]");
  
        requiredFields.forEach((field) => {
          if (field.type === "radio") {
            const name = field.name;
            const radios = form.querySelectorAll(`input[name="${name}"]`);
            const checked = [...radios].some((radio) => radio.checked);
            const formCheck = field.closest(".form-check") || field.parentElement; // Evita erro se não houver ".form-check"
            if (!checked) {
              isValid = false;
              formCheck.classList.add("border", "border-danger", "p-2", "rounded");
            } else {
              formCheck.classList.remove("border", "border-danger", "p-2", "rounded");
            }
          } else if (field.tagName === "SELECT") {
            if (field.value === "") {
              isValid = false;
              field.classList.add("border", "border-danger");
            } else {
              field.classList.remove("border", "border-danger");
            }
          } else {
            if (!field.value.trim()) {
              isValid = false;
              field.classList.add("border", "border-danger");
            } else {
              field.classList.remove("border", "border-danger");
            }
          }
        });
  
        if (!isValid) {
          alert("Por favor, preencha todos os campos obrigatórios antes de enviar o formulário.");
        }
  
        return isValid;
      }
  
      // Evento para o botão "Enviar" (Validação antes do envio)
      document.querySelector(".btn-success").addEventListener("click", function (event) {
        const lastStep = forms[forms.length - 1]; // Última etapa do formulário
        if (!validateFields(lastStep)) {
          event.preventDefault(); // Impede o envio se houver campos vazios
        }
      });
  
      // Mostra a primeira etapa ao carregar a página
      showStep(currentStep);
  
  
  });
  