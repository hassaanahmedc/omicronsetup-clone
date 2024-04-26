function displayTextWithDelay(id, delay) {
    setTimeout(() => {
      const textElement = document.getElementById(id);
      textElement.classList.remove('hidden'); 
    }, delay);
  }

  const delays = {
    "txt-1": 1000,
    "txt-2": 1500,
    "txt-3": 2500,
    "txt-4": 3000,
    "txt-5": 3500,
    "txt-6": 4000,
    "txt-7": 4500,
    "txt-8": 5000,
    "txt-9": 5300,
    "txt-10": 6000,
    "txt-11": 6300,
    "txt-12": 6500
  };

  Object.keys(delays).forEach(id => {
    displayTextWithDelay(id, delays[id]);
  });

  let count = 10;

  const updateCount = () => {
    const countElement= document.getElementById('countdown');
    countElement.textContent = count;
    count --;

    if (count < 0) {
        clearInterval(countdownInterval);
        countElement.textContent = '0';
        window.location.href = 'http://127.0.0.1:8000/home'
    }
  }

  const countdownInterval = setInterval(updateCount, 1000);