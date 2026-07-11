document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('header');
    const menuBtn = document.querySelector('.menu-toggle');
    const overlay = document.querySelector('.menu-overlay');
    
    menuBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        header.classList.toggle('open');
    });

    overlay.addEventListener('click', () => {
        header.classList.remove('open');
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.snow-monkey-form');
    const textarea = document.querySelector('.smf-textarea-control__control');
    
    if (!form || !textarea) return;

    const itemWrapper = textarea.closest('.wp-block-snow-monkey-forms-item');

    // 1. 送信ボタンが押された時のチェック
    form.addEventListener('submit', (e) => {
        const value = textarea.value.trim();

        if (value === '') {
            e.preventDefault();
            e.stopPropagation();

            // すでにエラーがある場合は重複させない
            const existingError = itemWrapper.querySelector('.smf-error-message');
            if (existingError) existingError.remove();

            // functions.php側と完全に一致させたエラーメッセージを生成
            const errorElement = document.createElement('div');
            errorElement.className = 'smf-error-message';
            errorElement.textContent = 'Can’t be empty'; // ← ここを共通化！
            
            textarea.after(errorElement);
            itemWrapper.classList.add('has-error');

            // フォーム全体のローディング表示を強制解除
            form.removeAttribute('data-loading');
            const submitButton = form.querySelector('[data-action="complete"]');
            if (submitButton) {
                submitButton.removeAttribute('disabled');
            }
            
            return false;
        }
    }, true);

    // 2. 【親切UI】ユーザーが文字を入力し始めたら、その場でエラーを消す処理
    textarea.addEventListener('input', () => {
        if (textarea.value.trim() !== '') {
            itemWrapper.classList.remove('has-error');
            const existingError = itemWrapper.querySelector('.smf-error-message');
            if (existingError) existingError.remove();
        }
    });
});