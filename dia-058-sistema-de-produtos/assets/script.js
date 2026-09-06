const modalAdicionar = document.getElementById("modal-adicionar");
const modalEditar = document.getElementById("modal-editar");

// Abrir Modal Adicionar
document.getElementById("btn-open-adicionar").addEventListener("click", () => {
  modalAdicionar.classList.add("active");
});

// Abrir Modal Editar + Autocompletar Inputs
document.querySelectorAll(".btn-open-editar").forEach((btn) => {
  btn.addEventListener("click", (e) => {
    const target = e.currentTarget;

    // Puxa os dados armazenados nos atributos 'data-*' do botão e preenche o modal
    document.getElementById("edit-id").value = target.getAttribute("data-id");
    document.getElementById("edit-nome").value =
      target.getAttribute("data-nome");
    document.getElementById("edit-categoria").value =
      target.getAttribute("data-categoria");
    document.getElementById("edit-preco").value =
      target.getAttribute("data-preco");
    document.getElementById("edit-quantidade").value =
      target.getAttribute("data-quantidade");

    modalEditar.classList.add("active");
  });
});

// Fechar Modais
document.querySelectorAll(".close-modal").forEach((btn) => {
  btn.addEventListener("click", () => {
    modalAdicionar.classList.remove("active");
    modalEditar.classList.remove("active");
  });
});
