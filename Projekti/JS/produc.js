let preveiwContainer = document.querySelector('.products-review');
let previewBox = document.querySelector('.preview');

document.querySelector('.products-container .product').forEach(product => {
    product.onclick = () => {
        preveiwContainer.style.display = 'flex';
        let name = product.getAttribute('data-name');
        previewBox.forEach(preview => {
            let target = preview.getAttribute('data-target');
            if (name == target) {
                preview.classList.add('active');
            }
        });
    };
});
previewBox.forEach(close =>{
    close.querySelector('.fa-times').onclick = () =>{
        close.classList.remove('active');
        preveiwContainer.style.display = 'none';

    }
})