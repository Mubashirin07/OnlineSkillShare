//Initializze swiper js



const swiper = new Swiper('.swiper', {
    // Optional parameters
    
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
 // And if we need scrollbar
  
  });

  const text = document.querySelector(".sec-text");

        const textLoad = () => {
            setTimeout(() => {
                text.textContent = "Cloud Computing";
            }, 0);
            setTimeout(() => {
                text.textContent = "Machine Learning";
            }, 4000);
            setTimeout(() => {
                text.textContent = "Devops";
            }, 8000); //1s = 1000 milliseconds
            setTimeout(() => {
                text.textContent = "BlockChain";
            }, 16000);
        }

        textLoad();
        setInterval(textLoad, 12000);