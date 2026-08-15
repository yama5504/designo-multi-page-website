document.addEventListener('DOMContentLoaded', () => {
    /*---------- メニュー開閉制御 ----------*/
    const header = document.getElementById('header');
    const menuBtn = document.querySelector('.menu-toggle');
    const overlay = document.querySelector('.menu-overlay');
    
    if (menuBtn && overlay) {
        menuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            header.classList.toggle('open');
        });

        overlay.addEventListener('click', () => {
            header.classList.remove('open');
        });
    }

/*---------- ローディングアニメーション ----------*/
    const loadingArea = document.querySelector('.loading_area');
    const loadingImg = document.querySelector('.loading_img');
    const loadingHole = document.querySelector('.hole');

    if (loadingImg && loadingHole && loadingArea) {
        // 01. 0.5秒後にロゴ表示（fade-in）
        setTimeout(() => {
            loadingImg.classList.add('loading1');
        }, 500);

        // 02. 1.9秒後にロゴ消去（fade-out）
        setTimeout(() => {
            loadingImg.classList.add('loading2');
        }, 1900);

        // 03. 3.3秒後に背景の穴を開ける
        setTimeout(() => {
            loadingHole.classList.add('active');
        }, 3300);

        // 04. 3.3秒後にローディング画面を消去（裏のコンテンツをクリック可能にする）
        setTimeout(() => {
            loadingArea.classList.add('is-loaded');
        }, 3300);
    }
});