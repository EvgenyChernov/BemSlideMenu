'use strict';

class SlideMenu {
    constructor(data) {
        this.mainBoxMenu = data['mainBoxMenu'];
        this.backgroundMenu = data['backgroundMenu'];
        this.search = data['search'];
        this.backgroundSearch = data['backgroundSearch'];
        this.arrayButtonMenuCategoryTagsId = data['arrayButtonMenuCategoryTagsId'];
        this.arrayPanelMenuTagsId = data['arrayPanelMenuTagsId'];
        this.mainPanelMenu = data['mainPanelMenu'];
        // перенес поиск элементов элементы которым необходимо зназначить событие в конструктор
        this.buttonToggleMenu = data['buttonToggleMenu'];
        this.buttonClose = data['buttonClose'];
        this.buttonFind = data['buttonFind'];
        this.buttonSearchClose = data['buttonSearchClose'];
        // Запускаю функции назначения слушателя событий на кнопки
        this.addEventListeners();
    }

    addEventListeners = () => {
        let self = this;
        // действие при нажатии на кнопку МЕНЮ
        this.buttonToggleMenu.addEventListener('click', function () {
            self.toggleMenu();
        });
        // действие при нажатии на кнопку КРЕСТИК
        this.buttonClose.addEventListener('click', function () {
            self.toggleMenu();
        });
        // действие при нажатии на кнопку ПОИСК
        this.buttonFind.addEventListener('click', function () {
            self.toggleSearch();
        });
        // действие при нажатии на кнопку КРЕСТИК В ПОИСКЕ
        this.buttonSearchClose.addEventListener('click', function () {
            self.toggleSearch();
        })
        // действия при нажатии кнопок категория тегов
        self.eventButtonCategories();
    }

    eventButtonCategories = () => {
        let self = this;
        this.arrayButtonMenuCategoryTagsId.forEach((buttonCategory) => {
            // получаю id кнопки
            let id = buttonCategory.getAttribute("data-categoryId");
            // ищу панель с таким же id
            this.arrayPanelMenuTagsId.forEach((panelMenuTags) => {
                let idPanel = panelMenuTags.getAttribute("data-categoryPanelId")
                if (id === idPanel) {
                    panelMenuTags.querySelector(".header__navBox-main-menu-buttonBack").addEventListener('click', function () {
                        panelMenuTags.classList.toggle('header__navBox-main-menu_positionCenter');
                        self.mainPanelMenu.classList.toggle('header__navBox-main-menu_positionLeft');
                    })
                    // добавляю слушатель событий на кнопку категория
                    buttonCategory.addEventListener('click', function () {
                        panelMenuTags.classList.toggle('header__navBox-main-menu_positionCenter');
                        self.mainPanelMenu.classList.toggle('header__navBox-main-menu_positionLeft');
                    })
                }
            })
        })
    }

    toggleMenu = () => {
        this.mainBoxMenu.classList.toggle('header__navBox-main_visible');
        this.backgroundMenu.classList.toggle('header__navBox-background_blurred');
    }

    toggleSearch = () => {
        this.search.classList.toggle('header_search_visible');
        this.backgroundSearch.classList.toggle('header__searchBox-background_blurred');
    };
}

let slideMenu = new SlideMenu({
    // кнопка меню
    'buttonToggleMenu': document.querySelector('.header__navBox-buttonToggleMenu'),
    // кнопка закрытия меню
    'buttonClose': document.querySelector('.header__navBox-main-menu-buttonClose'),
    // кнопка поиска
    'buttonFind': document.querySelector('.header__searchBox-buttonToggleFind'),
    // кнопка закрытия поиска
    'buttonSearchClose': document.querySelector('.header__search-buttonClose'),
    // массив кнопок категорий тегов на гланой странице меню
    'arrayButtonMenuCategoryTagsId': document.querySelectorAll('[data-categoryId]'),
    // главная родительская панель меню
    'mainBoxMenu': document.querySelector('.header__navBox-main'),
    // первичная панель меню
    'mainPanelMenu': document.querySelector('.header__navBox-main-menu'),
    // массив вторичных панелей с тегами разбитых по категориям
    'arrayPanelMenuTagsId': document.querySelectorAll('[data-categoryPanelId]'),
    //размытый фон меню
    'backgroundMenu': document.querySelector('.header__navBox-background'),
    // панель поиска
    'search': document.querySelector('.header__search'),
    //размытый фон поиска
    'backgroundSearch': document.querySelector('.header__searchBox-background'),
})
