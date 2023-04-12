const colorPalette = ["--gray", "--yellow", "--red", "--gray"];
const animations = ["slideInUp", "slideInDown", "slideOutUp", "slideOutDown"];
const serviceItems = document.querySelectorAll(
  "#service .service-desktop .service-item"
);
const serviceImages = document.querySelectorAll(
  "#service .service-desktop .service-img-item"
);

const servicePagination = document.querySelector(
  "#service .service-desktop .pagination"
);

const serviceWrapper = document.querySelector(
  "#service .service-desktop .service-wrapper"
);

const buttonControl = document.querySelector(
  "#service .service-desktop .button-control"
);

const serviceWebsiteImages = [
  `<svg width="224" height="224" viewBox="0 0 224 224" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="112" cy="112" r="111.5" stroke="black"/><circle cx="112.655" cy="112.655" r="72.8567" stroke="black"/><circle cx="112" cy="112" r="42.0731" fill="black" stroke="black"/></svg>`,
  `<svg width="224" height="224" viewBox="0 0 224 224" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="112" cy="112" r="111.5" stroke="black"/><mask id="path-2-inside-1_7_54" fill="white"><path fill-rule="evenodd" clip-rule="evenodd" d="M112.655 186.012C153.169 186.012 186.012 153.169 186.012 112.655C186.012 72.1412 153.169 39.2982 112.655 39.2982C72.1412 39.2982 39.2982 72.1412 39.2982 112.655C39.2982 153.169 72.1412 186.012 112.655 186.012ZM112 154.573C135.512 154.573 154.573 135.512 154.573 112C154.573 88.4875 135.512 69.4269 112 69.4269C88.4875 69.4269 69.4269 88.4875 69.4269 112C69.4269 135.512 88.4875 154.573 112 154.573Z"/></mask><path fill-rule="evenodd" clip-rule="evenodd" d="M112.655 186.012C153.169 186.012 186.012 153.169 186.012 112.655C186.012 72.1412 153.169 39.2982 112.655 39.2982C72.1412 39.2982 39.2982 72.1412 39.2982 112.655C39.2982 153.169 72.1412 186.012 112.655 186.012ZM112 154.573C135.512 154.573 154.573 135.512 154.573 112C154.573 88.4875 135.512 69.4269 112 69.4269C88.4875 69.4269 69.4269 88.4875 69.4269 112C69.4269 135.512 88.4875 154.573 112 154.573Z" fill="black"/><path d="M185.012 112.655C185.012 152.616 152.616 185.012 112.655 185.012V187.012C153.721 187.012 187.012 153.721 187.012 112.655H185.012ZM112.655 40.2982C152.616 40.2982 185.012 72.6935 185.012 112.655H187.012C187.012 71.5889 153.721 38.2982 112.655 38.2982V40.2982ZM40.2982 112.655C40.2982 72.6935 72.6935 40.2982 112.655 40.2982V38.2982C71.5889 38.2982 38.2982 71.5889 38.2982 112.655H40.2982ZM112.655 185.012C72.6935 185.012 40.2982 152.616 40.2982 112.655H38.2982C38.2982 153.721 71.5889 187.012 112.655 187.012V185.012ZM153.573 112C153.573 134.96 134.96 153.573 112 153.573V155.573C136.065 155.573 155.573 136.065 155.573 112H153.573ZM112 70.4269C134.96 70.4269 153.573 89.0398 153.573 112H155.573C155.573 87.9352 136.065 68.4269 112 68.4269V70.4269ZM70.4269 112C70.4269 89.0398 89.0398 70.4269 112 70.4269V68.4269C87.9352 68.4269 68.4269 87.9352 68.4269 112H70.4269ZM112 153.573C89.0398 153.573 70.4269 134.96 70.4269 112H68.4269C68.4269 136.065 87.9352 155.573 112 155.573V153.573Z" fill="black" mask="url(#path-2-inside-1_7_54)"/></svg>`,
  `<svg width="224" height="224" viewBox="0 0 224 224" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M224 112C224 173.856 173.856 224 112 224C50.1441 224 0 173.856 0 112C0 50.1441 50.1441 0 112 0C173.856 0 224 50.1441 224 112ZM111.573 153.146C134.533 153.146 153.146 134.533 153.146 111.573C153.146 88.6129 134.533 70 111.573 70C88.6129 70 70 88.6129 70 111.573C70 134.533 88.6129 153.146 111.573 153.146ZM111.573 154.146C135.086 154.146 154.146 135.086 154.146 111.573C154.146 88.0606 135.086 69 111.573 69C88.0606 69 69 88.0606 69 111.573C69 135.086 88.0606 154.146 111.573 154.146ZM112.357 185.713C152.871 185.713 185.713 152.871 185.713 112.357C185.713 71.8429 152.871 39 112.357 39C71.8429 39 39 71.8429 39 112.357C39 152.871 71.8429 185.713 112.357 185.713Z" fill="black"/></svg>`,
  `<svg width="224" height="224" viewBox="0 0 224 224" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="112" cy="112" r="111.5" stroke="black"/><circle cx="112.655" cy="112.655" r="72.8567" stroke="black"/><circle cx="112" cy="112" r="42.0731" fill="black" stroke="black"/></svg>`,
];

const serviceDigitalImages = [
  '<svg width="224" height="225" viewBox="0 0 224 225" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.10799 56.6364L112 0.560293L222.892 56.6364L112 112.712L1.10799 56.6364Z" stroke="black"/><path d="M31.2467 56.3275L111.345 16.2783L191.443 56.3275L111.345 96.3767L31.2467 56.3275Z" fill="black" stroke="black"/><path d="M222.69 56.3275V165.708L111.682 224M111.682 224V113.084M111.682 224L1.43591 166.069V57.2727" stroke="black"/></svg>',
  '<svg width="224" height="225" viewBox="0 0 224 225" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.10799 56.6364L112 0.560293L222.892 56.6364L112 112.712L1.10799 56.6364Z" stroke="black"/><path d="M31.2467 56.3275L111.345 16.2783L191.443 56.3275L111.345 96.3767L31.2467 56.3275Z" fill="black" stroke="black"/><path d="M222.69 56.3275V165.708L111.681 224M111.681 224V113.084M111.681 224L1.43591 166.069V57.2727" stroke="black"/><path d="M210.901 77.9415L126.409 121.825V201.731L210.901 157.193V77.9415Z" fill="black" stroke="black"/><path d="M210.901 77.9415L126.409 121.825V201.731L210.901 157.193V77.9415Z" fill="black" stroke="black"/></svg>',
  '<svg width="224" height="225" viewBox="0 0 224 225" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.10799 56.6364L112 0.560293L222.892 56.6364L112 112.712L1.10799 56.6364Z" stroke="black"/><path d="M31.2467 56.3275L111.345 16.2783L191.443 56.3275L111.345 96.3767L31.2467 56.3275Z" fill="black" stroke="black"/><path d="M222.69 56.3275V165.708L111.682 224M111.682 224V113.084M111.682 224L1.43591 166.069V57.2727" stroke="black"/><path d="M210.901 77.9415L126.409 121.825V201.731L210.901 157.193V77.9415Z" fill="black" stroke="black"/><path d="M210.901 77.9415L126.409 121.825V201.731L210.901 157.193V77.9415Z" fill="black" stroke="black"/><path d="M13.0994 77.2866L97.5906 121.17V201.076L13.0994 156.538V77.2866Z" fill="black" stroke="black"/></svg>',
  '<svg width="224" height="225" viewBox="0 0 224 225" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.10799 56.6364L112 0.560293L222.892 56.6364L112 112.712L1.10799 56.6364Z" stroke="black"/><path d="M31.2467 56.3275L111.345 16.2783L191.443 56.3275L111.345 96.3767L31.2467 56.3275Z" fill="black" stroke="black"/><path d="M222.69 56.3275V165.708L111.682 224M111.682 224V113.084M111.682 224L1.43591 166.069V57.2727" stroke="black"/><path d="M13.0994 77.2866L97.5906 121.17V201.076L13.0994 156.538V77.2866Z" fill="black" stroke="black"/></svg>',
];

const serviceAdvertisingImages = [
  '<svg width="224" height="146" viewBox="0 0 224 146" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="19.5" width="223" height="126" stroke="white"/><path d="M60 20L71.6552 1H151.897L164 20" stroke="white"/><circle cx="111.5" cy="82.5" r="34" stroke="white"/><path d="M155.5 83C155.5 107.582 135.795 127.5 111.5 127.5C87.2047 127.5 67.5 107.582 67.5 83C67.5 58.418 87.2047 38.5 111.5 38.5C135.795 38.5 155.5 58.418 155.5 83Z" stroke="white"/><rect x="174.5" y="34.5" width="35" height="14" stroke="white"/><rect x="19.5" y="1.5" width="23" height="18" stroke="white"/></svg>',
  '<svg width="224" height="146" viewBox="0 0 224 146" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="19.5" width="223" height="126" stroke="white"/><path d="M60 20L71.6552 1H151.897L164 20" stroke="white"/><path d="M155.5 83C155.5 107.582 135.795 127.5 111.5 127.5C87.2047 127.5 67.5 107.582 67.5 83C67.5 58.418 87.2047 38.5 111.5 38.5C135.795 38.5 155.5 58.418 155.5 83Z" stroke="white"/><rect x="19.5" y="14.5" width="23" height="5" stroke="white"/><path d="M186.087 18.7394L194.527 11.8528L192.675 22.4589L192.553 23.1553L193.25 23.0379L204.051 21.2199L197.056 29.4841L196.592 30.0323L197.267 30.2772L207.533 34L197.267 37.7228L196.592 37.9677L197.056 38.5159L204.051 46.7801L193.25 44.9621L192.553 44.8447L192.675 45.5411L194.527 56.1472L186.087 49.2606L185.548 48.8207L185.303 49.472L181.5 59.58L177.697 49.472L177.452 48.8207L176.913 49.2606L168.473 56.1472L170.325 45.5411L170.447 44.8447L169.75 44.9621L158.949 46.7801L165.944 38.5159L166.408 37.9677L165.733 37.7228L155.467 34L165.733 30.2772L166.408 30.0323L165.944 29.4841L158.949 21.2199L169.75 23.0379L170.447 23.1553L170.325 22.4589L168.473 11.8528L176.913 18.7394L177.452 19.1793L177.697 18.5281L181.5 8.42005L185.303 18.5281L185.548 19.1793L186.087 18.7394Z" fill="white" stroke="white"/><mask id="path-6-inside-1_20_2" fill="white"><path d="M146 82.5C146 73.35 142.365 64.5748 135.895 58.1048C129.425 51.6348 120.65 48 111.5 48C102.35 48 93.5748 51.6348 87.1048 58.1048C80.6348 64.5748 77 73.35 77 82.5L111.5 82.5H146Z"/></mask><path d="M146 82.5C146 73.35 142.365 64.5748 135.895 58.1048C129.425 51.6348 120.65 48 111.5 48C102.35 48 93.5748 51.6348 87.1048 58.1048C80.6348 64.5748 77 73.35 77 82.5L111.5 82.5H146Z" fill="#FDFDFD" stroke="white" stroke-width="2" mask="url(#path-6-inside-1_20_2)"/><mask id="path-7-inside-2_20_2" fill="white"><path d="M77 82.5C77 91.65 80.6348 100.425 87.1048 106.895C93.5748 113.365 102.35 117 111.5 117C120.65 117 129.425 113.365 135.895 106.895C142.365 100.425 146 91.65 146 82.5L111.5 82.5L77 82.5Z"/></mask><path d="M77 82.5C77 91.65 80.6348 100.425 87.1048 106.895C93.5748 113.365 102.35 117 111.5 117C120.65 117 129.425 113.365 135.895 106.895C142.365 100.425 146 91.65 146 82.5L111.5 82.5L77 82.5Z" stroke="white" stroke-width="2" mask="url(#path-7-inside-2_20_2)"/></svg>',
  '<svg width="224" height="146" viewBox="0 0 224 146" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="19.5" width="223" height="126" stroke="white"/><path d="M60 20L71.6552 1H151.897L164 20" stroke="white"/><path d="M155.5 83C155.5 107.582 135.795 127.5 111.5 127.5C87.2047 127.5 67.5 107.582 67.5 83C67.5 58.418 87.2047 38.5 111.5 38.5C135.795 38.5 155.5 58.418 155.5 83Z" stroke="white"/><rect x="19.5" y="14.5" width="23" height="5" stroke="white"/><path d="M188.417 19.0451L202.027 7.86746L199.039 25.0954L198.918 25.792L199.615 25.6739L217.047 22.7205L205.748 36.156L205.289 36.7026L205.96 36.9474L222.542 43L205.96 49.0526L205.289 49.2974L205.748 49.844L217.047 63.2795L199.615 60.3261L198.918 60.208L199.039 60.9046L202.027 78.1325L188.417 66.9549L187.876 66.5109L187.632 67.1663L181.5 83.5718L175.368 67.1663L175.124 66.5109L174.583 66.9549L160.973 78.1325L163.961 60.9046L164.082 60.208L163.385 60.3261L145.953 63.2795L157.252 49.844L157.711 49.2974L157.04 49.0526L140.458 43L157.04 36.9474L157.711 36.7026L157.252 36.156L145.953 22.7205L163.385 25.6739L164.082 25.792L163.961 25.0954L160.973 7.86746L174.583 19.0451L175.124 19.4891L175.368 18.8337L181.5 2.42818L187.632 18.8337L187.876 19.4891L188.417 19.0451Z" fill="white" stroke="white"/><circle cx="111.5" cy="82.5" r="34" fill="#FDFDFD" stroke="white"/></svg>',
  '<svg width="224" height="146" viewBox="0 0 224 146" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="19.5" width="223" height="126" stroke="white"/><path d="M60 20L71.6552 1H151.897L164 20" stroke="white"/><circle cx="111.5" cy="82.5" r="34" stroke="white"/><path d="M155.5 83C155.5 107.582 135.795 127.5 111.5 127.5C87.2047 127.5 67.5 107.582 67.5 83C67.5 58.418 87.2047 38.5 111.5 38.5C135.795 38.5 155.5 58.418 155.5 83Z" stroke="white"/><rect x="174.5" y="34.5" width="35" height="14" stroke="white"/><rect x="19.5" y="1.5" width="23" height="18" stroke="white"/></svg>',
];

const serviceSEOImages = [
  '<svg width="224" height="225" viewBox="0 0 224 225" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.10799 56.6364L112 0.560293L222.892 56.6364L112 112.712L1.10799 56.6364Z" stroke="black"/><path d="M31.2467 56.3275L111.345 16.2783L191.443 56.3275L111.345 96.3767L31.2467 56.3275Z" fill="black" stroke="black"/><path d="M222.69 56.3275V165.708L111.682 224M111.682 224V113.084M111.682 224L1.43591 166.069V57.2727" stroke="black"/></svg>',
  '<svg width="224" height="225" viewBox="0 0 224 225" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.10799 56.6364L112 0.560293L222.892 56.6364L112 112.712L1.10799 56.6364Z" stroke="black"/><path d="M31.2467 56.3275L111.345 16.2783L191.443 56.3275L111.345 96.3767L31.2467 56.3275Z" fill="black" stroke="black"/><path d="M222.69 56.3275V165.708L111.681 224M111.681 224V113.084M111.681 224L1.43591 166.069V57.2727" stroke="black"/><path d="M210.901 77.9415L126.409 121.825V201.731L210.901 157.193V77.9415Z" fill="black" stroke="black"/><path d="M210.901 77.9415L126.409 121.825V201.731L210.901 157.193V77.9415Z" fill="black" stroke="black"/></svg>',
  '<svg width="224" height="225" viewBox="0 0 224 225" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.10799 56.6364L112 0.560293L222.892 56.6364L112 112.712L1.10799 56.6364Z" stroke="black"/><path d="M31.2467 56.3275L111.345 16.2783L191.443 56.3275L111.345 96.3767L31.2467 56.3275Z" fill="black" stroke="black"/><path d="M222.69 56.3275V165.708L111.682 224M111.682 224V113.084M111.682 224L1.43591 166.069V57.2727" stroke="black"/><path d="M210.901 77.9415L126.409 121.825V201.731L210.901 157.193V77.9415Z" fill="black" stroke="black"/><path d="M210.901 77.9415L126.409 121.825V201.731L210.901 157.193V77.9415Z" fill="black" stroke="black"/><path d="M13.0994 77.2866L97.5906 121.17V201.076L13.0994 156.538V77.2866Z" fill="black" stroke="black"/></svg>',
  '<svg width="224" height="225" viewBox="0 0 224 225" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.10799 56.6364L112 0.560293L222.892 56.6364L112 112.712L1.10799 56.6364Z" stroke="black"/><path d="M31.2467 56.3275L111.345 16.2783L191.443 56.3275L111.345 96.3767L31.2467 56.3275Z" fill="black" stroke="black"/><path d="M222.69 56.3275V165.708L111.682 224M111.682 224V113.084M111.682 224L1.43591 166.069V57.2727" stroke="black"/><path d="M13.0994 77.2866L97.5906 121.17V201.076L13.0994 156.538V77.2866Z" fill="black" stroke="black"/></svg>',
];
let count = 0;

// Ham render dot

const renderDots = () => {
  let htmls = ['<div class="dot active"></div>'];
  for (i = 0; i < serviceItems.length - 1; i++) {
    const html = `<div class="dot"></div>`;
    htmls.push(html);
  }
  servicePagination.innerHTML = htmls.join("");
};

renderDots();

const serviceDots = document.querySelectorAll(
  "#service .service-desktop .pagination .dot"
);

// Ham lam hieu ung hinh anh

const changeImages = () => {
  let i = 0;
  setInterval(() => {
    if (i < serviceWebsiteImages.length) {
      serviceImages[0].innerHTML = `${serviceWebsiteImages[i]}`;
      serviceImages[1].innerHTML = `${serviceDigitalImages[i]}`;
      serviceImages[2].innerHTML = `${serviceAdvertisingImages[i]}`;
      serviceImages[3].innerHTML = `${serviceSEOImages[i]}`;
      i++;
    } else {
      i = 0;
    }
  }, 350);
};

changeImages();

// Ham tu dong chay slide dich vu

const autoplay = setInterval(() => {
  if (count < serviceItems.length - 1) {
    count++;
    changeService();
  } else {
    count = 0;
    changeService();
  }
  if (count === 2) {
    servicePagination.classList.add("white");
    buttonControl.classList.add("white");
  } else {
    servicePagination.classList.remove("white");
    buttonControl.classList.remove("white");
  }
}, 5000);

// Ham set kieu animation

const setAnimate = (el, type) => {
  document.querySelector(
    `.${el}.active`
  ).style.animationName = `${animations[type]}`;
};

// Ham set class

const handleActive = (elRemove, elSet) => {
  if (elRemove === "service-item") {
    setAnimate(elRemove, 2);
  } else {
    setAnimate(elRemove, 3);
  }

  setTimeout(() => {
    document.querySelector(`.${elRemove}.active`).classList.remove("active");
    elSet.classList.add("active");
    if (elSet.classList == "service-item active") {
      setAnimate(elRemove, 0);
    } else {
      setAnimate(elRemove, 1);
    }
  }, 500);
};

// Ham thay doi dich vu

const changeService = () => {
  handleActive("service-item", serviceItems[count]);
  handleActive("service-img-item", serviceImages[count]);
  handleActive("dot", serviceDots[count]);
  serviceWrapper.style.backgroundColor = `var(${colorPalette[count]})`;
};

// Ham xu li thay doi dich vu

const handleControl = (action) => {
  clearInterval(autoplay);

  if (action === "next") {
    if (count < serviceItems.length - 1) {
      count++;
      changeService();
    }
  } else if (action === "prev") {
    if (0 < count) {
      count--;
      changeService();
    }
  }
  if (count === 2) {
    servicePagination.classList.add("white");
    buttonControl.classList.add("white");
  } else {
    servicePagination.classList.remove("white");
    buttonControl.classList.remove("white");
  }
};
