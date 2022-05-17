window.onload = function () {
    var gallery = {
        block: '.gallery',
        tabsBlock: '.tabs',
        mainBlock: '.main',
        bigImage: { src: 'img/big/card1.jpg', alt: 'Some img' },
        allImages: [
            { src: 'img/small/card1.jpg', alt: 'Some img' },
            { src: 'img/small/card2.jpg', alt: 'Some img' },
            { src: 'img/small/card3.jpg', alt: 'Some img' },
            { src: 'img/small/card4.jpg', alt: 'Some img' },
        ],
        renderTabs() {
            var block = document.querySelector(this.tabsBlock);
            for (var img of this.allImages) {
                block.insertAdjacentHTML('beforeend', this.createImg(img));
            }
        },
        renderMain() {
            document.querySelector(this.mainBlock).innerHTML = this.createImg(this.bigImage)
        },
        init() {
            this.renderTabs();
            this.renderMain();
            this.controller();
        },
        controller() {
            var that = this;
            document.querySelector(this.tabsBlock).addEventListener('click', function (e) {
                if (e.target.tagName === 'IMG') {
                    that.bigImage.src = e.target.src.replace('small', 'big');
                    that.renderMain();
                }
            })
        },
        createImg(img) {
            return `<img src="${img.src}" alt="${img.alt}">`
        }
    };
    gallery.init()

}