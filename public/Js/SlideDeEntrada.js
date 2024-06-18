// Função que será chamada quando o elemento entrar na área visível
function handleIntersect(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('slideAtivo');
        observer.unobserve(entry.target);
      }
    });
  }
  
  // Cria um novo IntersectionObserver
  const observer = new IntersectionObserver(handleIntersect, { threshold: 0.5 });
  
  // Seleciona o elemento que queremos observar
  const meuElemento = document.getElementById('meuElemento');
  
  // Começa a observar o elemento
  observer.observe(meuElemento);
  