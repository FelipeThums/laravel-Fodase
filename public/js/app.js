document.addEventListener("DOMContentLoaded", function() {
  // Seleciona os itens da thumbnail e os itens do carrossel
  const thumbnailItems = document.querySelectorAll(".thumbnail .item");
  const carouselItems = document.querySelectorAll(".carrossel .lista .item");
  let currentIndex = 0;
  let intervalId;

  // Remove qualquer classe active existente
  carouselItems.forEach(item => item.classList.remove("active"));

  // Ativa o primeiro item com um pequeno delay para disparar as animações
  setTimeout(() => {
    if (carouselItems[0]) {
      carouselItems[0].classList.add("active");
    }
  }, 100);

  // Função para exibir o item ativo e disparar as animações
  function showImage(index) {
    // Remove a classe active de todos os itens
    carouselItems.forEach(item => item.classList.remove("active"));
    // Adiciona a classe active ao item do índice atual
    carouselItems[index].classList.add("active");

    // Se houver thumbnails, podemos também atualizar um indicador ativo, se desejado
    thumbnailItems.forEach(item => item.classList.remove("active"));
    if (thumbnailItems[index]) {
      thumbnailItems[index].classList.add("active");
    }
  }

  // Função para iniciar o intervalo
  function startInterval() {
    intervalId = setInterval(() => {
      currentIndex++;
      if (currentIndex >= carouselItems.length) {
        currentIndex = 0; // volta para o início quando chegar ao fim
      }
      showImage(currentIndex);
    }, 10000);
  }

  // Função para reiniciar o intervalo
  function resetInterval() {
    clearInterval(intervalId);
    startInterval();
  }

  // Inicia o intervalo pela primeira vez
  startInterval();

  // Adiciona o evento de mousemove para reiniciar o intervalo
  document.addEventListener("mousemove", resetInterval);

  // Opcional: se o usuário clicar em uma thumbnail, atualiza o índice e exibe o item correspondente
  thumbnailItems.forEach((thumb, index) => {
    thumb.addEventListener("click", () => {
      currentIndex = index;
      showImage(currentIndex);
      resetInterval(); // Reinicia o intervalo quando o usuário clica em uma thumbnail
    });
  });
});

// Dados das vagas
let vagas = {
  1: {
      titulo: "Desenvolvedor Front-end",
      descricao: "Procuramos um desenvolvedor front-end com experiência em React e Vue.js para trabalhar em projetos inovadores."
  },
  2: {
      titulo: "Desenvolvedor Back-end",
      descricao: "Vaga para desenvolvedor back-end com conhecimentos em Node.js, Python e bancos de dados relacionais."
  },
  3: {
      titulo: "UX/UI Designer",
      descricao: "Designer criativo para desenvolver interfaces intuitivas e experiências de usuário excepcionais."
  },
  4: {
      titulo: "Analista de Dados",
      descricao: "Profissional para análise de dados e criação de relatórios estratégicos para a empresa."
  },
  5: {
      titulo: "Gerente de Projetos",
      descricao: "Coordene equipes e garanta a entrega de projetos dentro do prazo e orçamento."
  },
  6: {
      titulo: "Especialista em Marketing",
      descricao: "Crie e implemente estratégias de marketing digital para aumentar nossa presença online."
  }
};

function mostrarVaga(id) {
  const vaga = vagas[id];
  if (vaga) {
      document.getElementById('vaga-titulo').textContent = vaga.titulo;
      document.getElementById('vaga-descricao').textContent = vaga.descricao;
      
      // Adiciona animação
      const titulo = document.getElementById('vaga-titulo');
      const descricao = document.getElementById('vaga-descricao');
      
      titulo.style.animation = 'none';
      descricao.style.animation = 'none';
      void titulo.offsetWidth; // Trigger reflow
      void descricao.offsetWidth;
      
      titulo.style.animation = 'fadeIn 0.5s ease-in-out';
      descricao.style.animation = 'fadeIn 0.5s ease-in-out';
      
      // Atualiza a vaga ativa
      document.querySelectorAll('.vaga-item').forEach(item => {
          item.classList.remove('active');
      });
      event.currentTarget.classList.add('active');
  }
}












