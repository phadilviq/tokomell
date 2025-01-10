const productContainers = document.querySelectorAll('.quantity');

productContainers.forEach(container => {
  const minusBtn = container.querySelector('.minus');
  const plusBtn = container.querySelector('.plus');
  const qtyInput = container.querySelector('.qty');

  plusBtn.addEventListener('click', () => {
    qtyInput.value++;
    minusBtn.classList.remove('disabled');
  });

  minusBtn.addEventListener('click', () => {
    if (qtyInput.value > 0) {
      qtyInput.value--;
      if (qtyInput.value === 0) {
        minusBtn.classList.add('disabled');
        // Ganti ikon menjadi keranjang sampah jika menggunakan Font Awesome
        minusBtn.textContent = '\f2ed';
      } else {
        // Kembalikan teks tombol menjadi '-' jika nilai tidak 0
        minusBtn.textContent = '-';
      }
    }
  });
});