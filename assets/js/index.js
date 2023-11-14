$(document).ready(() => {
    // Данные для заполнения расширенного меню
    const navigations = [
        {
            'name': 'Управление',
            'fields': [
                {
                    'name': 'Положение об Управлении',
                    'link': '#',
                },
                

                {
                    'name': 'Структура Управления',
                    'fields': [
                        {
                            'name': 'Начальник и заместители',
                            'link': '#',
                        },

                        {
                            'name': 'МКУ ЦМХО',
                            'link': '#',
                        }
                    ]
                },

                {
                    'name': 'Планы и отчеты',
                    'link': '#',
                },

                {
                    'name': 'Противодействие коррупции',
                    'link': '#',
                },
            ]
        },

        {
            'name': 'Деятельность',
            'fields': [
                {
                    'name': 'Муниципальные услуги',
                    'fields': [
                        {
                            'name': 'Административные регламенты',
                            'link': '#',
                        },
                    ]
                },

                {
                    'name': 'Прием в образовательные организации',
                    'fields': [
                        {
                            'name': 'Прием в дошкольные образовательные учреждения',
                            'link': '#',
                        },

                        {
                            'name': 'Прием в общеобразовательные учреждения',
                            'link': '#',
                        },

                        {
                            'name': 'Прием в учреждения дополнительного образования',
                            'link': '#',
                        },
                    ]
                },
                
                {
                    'name': 'Государственная итоговая аттестация',
                    'fields': [
                        {
                            'name': 'Основной государственный экзамен (ОГЭ)',
                            'link': '#',
                        },

                        {
                            'name': 'Единый государственный экзамен (ЕГЭ)',
                            'link': '#',
                        },

                        {
                            'name': 'Акции в рамках подготовки к ГИА',
                            'link': '#',
                        },
                    ]
                },

                {
                    'name': 'Работа с кадрами',
                    'fields': [
                        {
                            'name': 'Аттестация педагогических работников',
                            'link': '#',
                        },

                        {
                            'name': 'Профессиональные конкурсы',
                            'link': '#',
                        },

                        {
                            'name': 'Кадровый резерв руководителей',
                            'link': '#',
                        },

                        {
                            'name': 'Конкурсный прием руководителей',
                            'link': '#',
                        },

                        {
                            'name': 'Вакансии',
                            'link': '#',
                        },
                    ]
                },

                {
                    'name': 'Дополнительное образование',
                    'link': '#',
                },

                {
                    'name': 'Семейное образвоание и самообразование',
                    'link': '#',
                },

                {
                    'name': 'Образование детей с особыми образовательными потребностями',
                    'link': '#',
                },

                {
                    'name': 'Организация питания детей',
                    'link': '#',
                },

                {
                    'name': 'Воспитательная работа',
                    'link': '#',
                },

                {
                    'name': 'Организация летнего отдыха и оздоровления детей',
                    'link': '#',
                },

                {
                    'name': 'Профилактика асоциального поведения несовершеннолетних',
                    'link': '#',
                },

                {
                    'name': 'Оценка качества образования',
                    'fields': [
                        {
                            'name': 'Результативность школ',
                            'link': '#',
                        },

                        {
                            'name': 'МУМы',
                            'link': '#',
                        },

                        {
                            'name': 'НОКО',
                            'link': '#',
                        },

                        {
                            'name': 'ВПР',
                            'link': '#',
                        },

                        {
                            'name': 'Функциональная грамотность',
                            'link': '#',
                        },
                    ]
                },

                {
                    'name': 'Безопасность',
                    'fields': [
                        {
                            'name': 'Пожарная безопасность',
                            'link': '#',
                        },

                        {
                            'name': 'Безопасность на воде',
                            'link': '#',
                        },

                        {
                            'name': 'Дорожная безопасность',
                            'link': '#',
                        },

                        {
                            'name': 'Информационная безопасность',
                            'link': '#',
                        },

                        {
                            'name': 'Противодействие экстремизму и терроризму',
                            'link': '#',
                        },
                    ]
                },

            ]
        },

        {
            'name': 'Документы',
            'fields': [
                {
                    'name': 'Федеральные документы',
                    'link': '#',
                },


                {
                    'name': 'Региональные документы',
                    'link': '#',
                },


                {
                    'name': 'Муниципальные документы',
                    'link': '#',
                },
                
            ]
        },

        {
            'name': 'Подведомственные организации',
            'fields': [
                {
                    'name': 'Школы ',
                    'link': '#',
                },


                {
                    'name': 'Детские сады',
                    'link': '#',
                },


                {
                    'name': 'Учреждения дополнительного образования',
                    'link': '#',
                },
                
            ]
        },

        {
            'name': 'Приёмная',
            'fields': [
                {
                    'name': 'Личный прием',
                    'link': '#',
                },


                {
                    'name': 'Часто задаваемые вопросы',
                    'link': '#',
                },


                {
                    'name': 'Задать вопрос',
                    'link': '#',
                },
                

                {
                    'name': 'Горячие линии',
                    'link': '#',
                },
            ]
        },

        {
            'name': 'Контакты',
            'link': '#',
        },
    ]

    // Заполняемость расширенного меню
    function fillExtendedMenu(name) {
        // Меняет заголовок
        $('.extendedMenu-title').text(name)

        // Генерация списка
        var data = navigations.find(item => item.name === name).fields;

        const column1 = $('#column1');
        const column2 = $('#column2');

        column1.empty();
        column2.empty();

        data.forEach(function (item, index) {
            if (item.fields) {
                const linkItem = $('<li>', {'class': 'extendedMenu-link'});
                const linkName = $('<h1>', {'class': 'linkName'}).text(item.name);
                const extendedLinks = $('<ul>', {'class': 'extendedLinks'});

                item.fields.forEach(function (field) {
                    const extendedLinksItem = $('<li>', {'class': 'extendedLinks-item'})
                    const extendedLinksItemLink = $('<a>', {'href': field.link}).text(field.name);
                    extendedLinksItem.append(extendedLinksItemLink)
                    extendedLinks.append(extendedLinksItem);
                });

                linkItem.append(linkName).append(extendedLinks);

                if (index % 2 === 0) {
                    column1.append(linkItem);
                } else {
                    column2.append(linkItem);
                }
            } else {
                const listItem = $('<li>', {'class': 'extendedMenu-link'})
                const listItemLink = $('<a>', {'href': item.link}).text(item.name);
                listItem.append(listItemLink)

                if (index % 2 === 0) {
                    column1.append(listItem);
                } else {
                    column2.append(listItem);
                }
            }
        });

    }
    

    // Закрытие расширенного меню
    function closeExtendedMenu() {
        $('.extendedMenu').removeClass('extendedMenu--show')
        $('.menu_item').removeClass('menu_item--selected')
        $('.overlay').removeClass('overlay--show')
    }


    // Открытие расширенного меню и заполнение его
    $('.menu_item:not(.menu_item--mainPage)').on('click', function() {
        // Закрытие расширенного меню
        if ($(this).hasClass('menu_item--selected')) {
            closeExtendedMenu()
            return
        }


        // Выбор элементов меню
        $('.menu_item').removeClass('menu_item--selected')
        $(this).addClass('menu_item--selected')


        // Меняем заполнение расширенного меню
        var menuName = $(this).text().trim()
        fillExtendedMenu(menuName)
        fillExtendedMenu(menuName)


        // Открытие расширенного меню
        var isOpen = $('.extendedMenu').hasClass('extendedMenu--show')
        if (isOpen) {return}

        else {
            console.log('Меняем заполняемость')
            $('.extendedMenu').addClass('extendedMenu--show')
            $('.overlay').addClass('overlay--show')
        }
    })


    // Закрытие расширенного меню
    $('.overlay, .menu_item--mainPage').on('click', function() {
        var isOpen = $('.extendedMenu').hasClass('extendedMenu--show')
        if (isOpen) {
            closeExtendedMenu()
        }

        var mobileMenuIsOpen = $('.mobileMenu').hasClass('mobileMenu--show')
        if (mobileMenuIsOpen) {
            $('.mobileMenu').removeClass('mobileMenu--show')
        }

        $('.overlay').removeClass('overlay--show')
        $('body').css('overflow', 'auto');
    })


    // Открытие/закрытие вложенного списка
    $('.extendedMenu-linkWrapper').on('click', '.extendedMenu-link:not(.extendedLinks-item)', function(event) {
        if (!$(this).find('.linkName').length > 0) { return }
    
        if ($(this).hasClass('extendedMenu-link--selected')) {
            $(this).removeClass('extendedMenu-link--selected')
            $(this).find('.linkName').removeClass('linkName--selected')
            $(this).find('.extendedLinks').removeClass('extendedLinks--selected')
        } else {
            $(this).addClass('extendedMenu-link--selected')
            $(this).find('.linkName').addClass('linkName--selected')
            $(this).find('.extendedLinks').addClass('extendedLinks--selected')
        }
    });


    // Перехват
    $('.extendedMenu-linkWrapper').on('click', '.extendedLinks-item', function(event) {
        event.stopPropagation();
    });


    // Открытие мобильного меню
    $('#menu').on('click', function() {
        $('.mobileMenu').addClass('mobileMenu--show')
        $('.overlay').addClass('overlay--show')

        $('body').css('overflow', 'hidden');
    })


    // Закрытие мобильного меню
    $('.mobileMenuClose').on('click', function() {
        $('.mobileMenu').removeClass('mobileMenu--show')
        $('.overlay').removeClass('overlay--show')
        
        $('body').css('overflow', 'auto');
    })


    // Заполнение мобильного меню
    function fillMobileMenu(fields) {
        var parent = $('.mobileMenuWrapper')
        
        $('.mobileLink').remove()

        fields.forEach((field) => {
            if (field.fields) {
                parent.append(
                    `
                        <div class="mobileLink mobileLink--extended">
                            <p class="mobileLink--text">${field['name']}</p>
                            <img src="./assets/images/menuArrow.svg" class="mobileLink--img">
                        </div>
                    `
                )
            }

            else {
                parent.append(
                    `
                        <a href=${field['link']} class="mobileLink">${field['name']}</a>
                    `
                )
            }
        })

       
    }


    // Начальное заполнение мобильного меню
    function startFillMobileMenu() {
        var parent = $('.mobileMenuWrapper')
        $('.mobileLink').remove()

        // Объявление уровня вложенности
        $('.mobileMenu-title').data('lvl', '1')

        navigations.forEach((item) => {
            if (item['fields']) {
                parent.append(
                    `
                        <div class="mobileLink mobileLink--extended">
                            <p class="mobileLink--text">${item['name']}</p>
                            <img src="./assets/images/menuArrow.svg" class="mobileLink--img">
                        </div>
                    `
                )
            }
        })
    }
    startFillMobileMenu()


    // Заполнение мобильного меню вторым уровнем
    function secondLvlMobileMenu(name) {
        if ($('.mobileMenu-title').data().lvl === '1') {
            $('.mobileMenu-title').data('lvl', '2')

            const item = navigations.find(item => item.name === name)
            fillMobileMenu(item.fields)
        }

        else if ($('.mobileMenu-title').data('lvl') === '2') {
            $('.mobileMenu-title').data('lvl', '3')
             
            const parentItem = navigations.find(item => item.name === $('.mobileMenu-title').text().trim())
            const item = parentItem.fields.find(item => item.name === name)
            fillMobileMenu(item.fields)
        }

         // Установка заголовка
         $('.mobileMenu-titleText').text(name)
         $('.mobileMenu-title').addClass('mobileMenu-title--show')
    }


    // Обработчик нажатия на элемент мобильного меню
    $('.mobileMenuWrapper').on('click', '.mobileLink--extended', function() {
        secondLvlMobileMenu($(this).find('.mobileLink--text').text())
    })


    // Обработчик кнопки "Назад" в мобильном меню
    $('.mobileMenu-backBtn').on('click', function() {
        startFillMobileMenu()
        $('.mobileMenu-title').removeClass('mobileMenu-title--show')
    }) 
    
    
})