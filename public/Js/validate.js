function showFields() {
    var tipo = document.getElementById('tipo').value;
    var empreendedorFields = document.getElementById('empreendedorFields');
    var investidorFields = document.getElementById('investidorFields');

    if (tipo === 'empreendedor') {
        empreendedorFields.style.display = 'block';
        investidorFields.style.display = 'none';
    } else if (tipo === 'investidor') {
        empreendedorFields.style.display = 'none';
        investidorFields.style.display = 'block';
    } else {
        empreendedorFields.style.display = 'none';
        investidorFields.style.display = 'none';
    }
}
document.addEventListener("DOMContentLoaded", function() {
let input = document.getElementById("contacto");

// Função para bloquear o caractere '-'
input.addEventListener("keypress", function(event) {
    if (event.key === '-') {
        event.preventDefault();
    }
});

// Função para remover o caractere '-' se for colado
input.addEventListener("input", function(event) {
    input.value = input.value.replace(/-/g, '');
});
});
