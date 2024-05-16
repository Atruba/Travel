const text = document.querySelectorAll('label');
          text.forEach(label =>{
            label.innerHTML = label.textContent.split('').map((text, wave) =>
            `<span style="transition-delay: ${wave * 50}ms">${text}</span>`).join('');
          });