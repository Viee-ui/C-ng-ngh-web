// tour-detail.js

document.addEventListener("DOMContentLoaded", () => {
  const params = new URLSearchParams(window.location.search);
  const id = params.get("id");
  const tour = tourData[id];

  const container = document.querySelector(".tour-detail-container");

  if (tour) {
    container.querySelector("img").src = tour.img;
    container.querySelector("img").alt = tour.title;
    container.querySelector("h2").textContent = tour.title;
    container.querySelector(".tour-content").innerHTML = tour.content;
  } else {
    container.innerHTML = `
      <h2>Không tìm thấy tour này!</h2>
      <p>Vui lòng quay lại và chọn tour hợp lệ.</p>
      <a href="tours.html" class="btn-back">← Trở về</a>
    `;
  }
});
