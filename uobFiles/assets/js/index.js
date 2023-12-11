$(document).ready(() => {

   // ��������� �������������� ��������
   $(document).ready(function () {
    let currentPage = 3;
    const newsPerPage = 3;

    function loadMoreNews() {
        $.ajax({
            url: 'load_more_news.php',
            type: 'POST',
            data: { page: currentPage, perPage: newsPerPage },
            success: function (data) {
                $('.newsWrapper').append(data);
                currentPage++;
            },
            error: function () {
                alert('������ ��� �������� ��������.');
            }
        });
    }

    $('.showMore').on('click', function () {
        loadMoreNews();
    });
});

    
        
    // ��������� ��������
    const bigZoom = (btn) => {
        $(btn).addClass('settingVision-btn--selected')
        $('.defaultScale').removeClass('settingVision-btn--selected')

        document.body.style.zoom = 1.5;
        var originalStyles = {};

        function setStyles(selector, styles) {
            originalStyles[selector] = $(selector).attr('style') || '';
            $(selector).css(styles);
        }

        function resetStyles() {
            document.body.style.zoom = 1;
            $('.defaultScale').addClass('settingVision-btn--selected')
            $('.bigScale').removeClass('settingVision-btn--selected')

            for (var selector in originalStyles) {
                $(selector).attr('style', originalStyles[selector]);
            }
        }

        setStyles('.container', {
            'max-width': '1440px',
            'padding': '0 50px',
            'margin': '0 auto'
        });


        setStyles('.headerIconWrapper', {
            'display': 'none'
        });

        setStyles('.emblemWrapper', {
            'display': 'none'
        });

        setStyles('.headerWrapper', {
            'height': '200px'
        });

        setStyles('.headerText', {
            'font-size': '32px'
        });


        setStyles('.menu_item', {
            'font-size': '16px'
        });

        setStyles('.extendedMenu-titleWrapper', {
            'display': 'none'
        });

        setStyles('.extendedMenu-linkWrapper', {
            'border-left': 'none',
            'padding-left': '0px',
            'display': 'flex',
            'justify-content': 'space-around',
            'align-items': 'start',
            'width': '100%'
        });

        setStyles('.extendedMenu-linkColumn', {
            'width': '40%'
        });

        setStyles('.extendedMenu-link + .extendedMenu-link', {
            'margin-top': '20px'
        });

        setStyles('.linkName, .extendedMenu-link', {
            'font-size': '18px'
        });

        setStyles('.wifiIcon', {
            'display': 'none'
        });

        setStyles('.aboutUsIcon, .aboutUsItem', {
            'display': 'none'
        });

        setStyles('.aboutUs-mobileText', {
            'display': 'block'
        });

        setStyles('.aboutUsItem-text + .aboutUsItem-text', {
            'margin-top': '30px'
        });

        setStyles('.aboutUsTitle', {
            'font-size': '32px'
        });

        setStyles('.aboutUs', {
            'margin-top': '50px'
        });

        setStyles('.newsItem-link', {
            'display': 'none'
        });

        setStyles('.phoneImg', {
            'display': 'none'
        });

        setStyles('.phoneItems', {
            'width': '100%'
        });


        setStyles('.settingVision-title', {
            'font-size': '20px'
        })

        setStyles('.settingVision-row', {
            'row-gap': '20px',
            'margin-top': '20px',
        })

        setStyles('.settingVision-btn', {
            'font-size': '20px',
            'padding': '7px 12px',
        })

        setStyles('.settingVision', {
            'width': '500px'
        })


        // ���������� ������� �� ������
        $('.defaultScale, .resetOptions').on('click', function () {
            resetStyles();
        });
    }
    $('.bigScale').on('click', () => bigZoom(event.target))


    // ������� ������ ��� ������������
    $('.visionBtn').on('click', () => {
       $('.settingVision').addClass('settingVision--show')
       $('.overlay').addClass('overlay--showww')
    })

    // ������� ������ ��� ������������
    $('.overlay').on('click', () => {
        $('.settingVision').removeClass('settingVision--show')
        $('.overlay').removeClass('overlay--showww')
    })

    $('.settingVisionCloseBtn').on('click', () => {
        $('.settingVision').removeClass('settingVision--show')
        $('.overlay').removeClass('overlay--showww')
    })


    // ������ ��� ������������
    const setSettingVis = (btn) => {
        const attrData = $(btn).attr('data-setVis') 

        if (attrData === "serif") {
            document.documentElement.setAttribute('data-font-type', 'serif')
            $('.font-type').removeClass('settingVision-btn--selected')
            $(btn).addClass('settingVision-btn--selected')
        }

        else if (attrData === "notSerif") {
            document.documentElement.setAttribute('data-font-type', 'notSerif')
            $('.font-type').removeClass('settingVision-btn--selected')
            $(btn).addClass('settingVision-btn--selected')
        }

        else if (attrData === "spacingSmall") {
            document.documentElement.setAttribute('data-letter-spacing', 'small')
            $('.letter-space').removeClass('settingVision-btn--selected')
            $(btn).addClass('settingVision-btn--selected')
        }

        else if (attrData === "spacingMedium") {
            document.documentElement.setAttribute('data-letter-spacing', 'medium')
            $('.letter-space').removeClass('settingVision-btn--selected')
            $(btn).addClass('settingVision-btn--selected')
        }

        else if (attrData === "spacingBig") {
            document.documentElement.setAttribute('data-letter-spacing', 'big')
            $('.letter-space').removeClass('settingVision-btn--selected')
            $(btn).addClass('settingVision-btn--selected')
        }

        else if (attrData === "imageHide") {
            document.documentElement.setAttribute('data-hide-image', 'hide')
            $('.imgHideShow').removeClass('settingVision-btn--selected')
            $(btn).addClass('settingVision-btn--selected')
        }

        else if (attrData === "imageShow") {
            document.documentElement.setAttribute('data-hide-image', 'show')
            $('.imgHideShow').removeClass('settingVision-btn--selected')
            $(btn).addClass('settingVision-btn--selected')
        }
        
    }
    $('.settingVision-btn').on('click', () => setSettingVis(event.target))



    // ����� ���� �����
    $('.resetOptions').on('click', () => {
        document.documentElement.setAttribute('data-hide-image', 'hide')
        document.documentElement.setAttribute('data-font-type', 'notSerif')
        document.documentElement.setAttribute('data-letter-spacing', 'small')

        $('.settingVision-btn').removeClass('settingVision-btn--selected');

        $('[data-setVis="notSerif"]').addClass('settingVision-btn--selected')
        $('[data-setVis="spacingSmall"]').addClass('settingVision-btn--selected')
        $('[data-setVis="imageHide"]').addClass('settingVision-btn--selected')
        $('.defaultScale').addClass('settingVision-btn--selected')
    })


    // ����� ����
    document.querySelector('.themeBtn').addEventListener('click', switchTheme, false);
    function switchTheme(e) {
        const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : 'light';

        document.documentElement.setAttribute('data-theme', currentTheme)
        if (currentTheme === 'light') {
            document.documentElement.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
        }
        
        else {
                document.documentElement.setAttribute('data-theme', 'light');
                localStorage.setItem('theme', 'light');
        }

        themeChangePictuge()
    }


    // ������ ��� ���������� ������������ ����
    const navigations = [
        {
            'name': '����������',
            'fields': [
                {
                    'name': '��������� �� ����������',
                    'link': '#',
                },
                

                {
                    'name': '��������� ����������',
                    'fields': [
                        {
                            'name': '��������� � �����������',
                            'link': '#',
                        },

                        {
                            'name': '��� ����',
                            'link': '#',
                        }
                    ]
                },

                {
                    'name': '����� � ������',
                    'link': '#',
                },

                {
                    'name': '��������������� ���������',
                    'link': '#',
                },
            ]
        },

        {
            'name': '������������',
            'fields': [
                {
                    'name': '������������� ������',
                    'fields': [
                        {
                            'name': '���������������� ����������',
                            'link': '#',
                        },
                    ]
                },

                {
                    'name': '����� � ��������������� �����������',
                    'fields': [
                        {
                            'name': '����� � ���������� ��������������� ����������',
                            'link': '#',
                        },

                        {
                            'name': '����� � ������������������� ����������',
                            'link': '#',
                        },

                        {
                            'name': '����� � ���������� ��������������� �����������',
                            'link': '#',
                        },
                    ]
                },
                
                {
                    'name': '��������������� �������� ����������',
                    'fields': [
                        {
                            'name': '�������� ��������������� ������� (���)',
                            'link': '#',
                        },

                        {
                            'name': '������ ��������������� ������� (���)',
                            'link': '#',
                        },

                        {
                            'name': '����� � ������ ���������� � ���',
                            'link': '#',
                        },
                    ]
                },

                {
                    'name': '������ � �������',
                    'fields': [
                        {
                            'name': '���������� �������������� ����������',
                            'link': '#',
                        },

                        {
                            'name': '���������������� ��������',
                            'link': '#',
                        },

                        {
                            'name': '�������� ������ �������������',
                            'link': '#',
                        },

                        {
                            'name': '���������� ����� �������������',
                            'link': '#',
                        },

                        {
                            'name': '��������',
                            'link': '#',
                        },
                    ]
                },

                {
                    'name': '�������������� �����������',
                    'link': '#',
                },

                {
                    'name': '�������� ����������� � ���������������',
                    'link': '#',
                },

                {
                    'name': '����������� ����� � ������� ���������������� �������������',
                    'link': '#',
                },

                {
                    'name': '����������� ������� �����',
                    'link': '#',
                },

                {
                    'name': '�������������� ������',
                    'link': '#',
                },

                {
                    'name': '����������� ������� ������ � ������������ �����',
                    'link': '#',
                },

                {
                    'name': '������������ ������������ ��������� ������������������',
                    'link': '#',
                },

                {
                    'name': '������ �������� �����������',
                    'fields': [
                        {
                            'name': '���������������� ����',
                            'link': '#',
                        },

                        {
                            'name': '����',
                            'link': '#',
                        },

                        {
                            'name': '����',
                            'link': '#',
                        },

                        {
                            'name': '���',
                            'link': '#',
                        },

                        {
                            'name': '�������������� �����������',
                            'link': '#',
                        },
                    ]
                },

                {
                    'name': '������������',
                    'fields': [
                        {
                            'name': '�������� ������������',
                            'link': '#',
                        },

                        {
                            'name': '������������ �� ����',
                            'link': '#',
                        },

                        {
                            'name': '�������� ������������',
                            'link': '#',
                        },

                        {
                            'name': '�������������� ������������',
                            'link': '#',
                        },

                        {
                            'name': '��������������� ����������� � ����������',
                            'link': '#',
                        },
                    ]
                },

            ]
        },

        {
            'name': '���������',
            'fields': [
                {
                    'name': '����������� ���������',
                    'link': '#',
                },


                {
                    'name': '������������ ���������',
                    'link': '#',
                },


                {
                    'name': '������������� ���������',
                    'link': '#',
                },
                
            ]
        },

        {
            'name': '���������������� �����������',
            'fields': [
                {
                    'name': '����� ',
                    'link': '#',
                },


                {
                    'name': '������� ����',
                    'link': '#',
                },


                {
                    'name': '���������� ��������������� �����������',
                    'link': '#',
                },
                
            ]
        },

        {
            'name': '�������',
            'fields': [
                {
                    'name': '������ �����',
                    'link': '#',
                },


                {
                    'name': '����� ���������� �������',
                    'link': '#',
                },


                {
                    'name': '������ ������',
                    'link': '#',
                },
                

                {
                    'name': '������� �����',
                    'link': '#',
                },
            ]
        },

        {
            'name': '��������',
            'link': '#',
        },
    ]

    // ������������� ������������ ����
    function fillExtendedMenu(name) {
        // ������ ���������
        $('.extendedMenu-title').text(name)

        // ��������� ������
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
    

    // �������� ������������ ����
    function closeExtendedMenu() {
        $('.extendedMenu').removeClass('extendedMenu--show')
        $('.menu_item').removeClass('menu_item--selected')
        $('.overlay').removeClass('overlay--show')
    }


    // �������� ������������ ���� � ���������� ���
    $('.menu_item:not(.menu_item--mainPage)').on('click', function() {
        // �������� ������������ ����
        if ($(this).hasClass('menu_item--selected')) {
            closeExtendedMenu()
            return
        }


        // ����� ��������� ����
        $('.menu_item').removeClass('menu_item--selected')
        $(this).addClass('menu_item--selected')


        // ������ ���������� ������������ ����
        var menuName = $(this).text().trim()
        fillExtendedMenu(menuName)


        // �������� ������������ ����
        var isOpen = $('.extendedMenu').hasClass('extendedMenu--show')
        if (isOpen) {return}

        else {
            $('.extendedMenu').addClass('extendedMenu--show')
            $('.overlay').addClass('overlay--show')
        }
    })


    // �������� ������������ ����
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


    // ��������/�������� ���������� ������
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


    // ��������
    $('.extendedMenu-linkWrapper').on('click', '.extendedLinks-item', function(event) {
        event.stopPropagation();
    });


    // �������� ���������� ����
    $('#menu').on('click', function() {
        $('.mobileMenu').addClass('mobileMenu--show')
        $('.overlay').addClass('overlay--show')

        $('body').css('overflow', 'hidden');
    })


    // �������� ���������� ����
    $('.mobileMenuClose').on('click', function() {
        $('.mobileMenu').removeClass('mobileMenu--show')
        $('.overlay').removeClass('overlay--show')
        
        $('body').css('overflow', 'auto');
    })


    // ���������� ���������� ����
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


    // ��������� ���������� ���������� ����
    function startFillMobileMenu() {
        var parent = $('.mobileMenuWrapper')
        $('.mobileLink').remove()

        // ���������� ������ �����������
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


    // �������� � ����������� �� ����
    const themeChangePictuge = () => {
        const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : 'light';
        document.documentElement.setAttribute('data-theme', currentTheme)

        const imagePath = './assets/images/'
        const theme = document.documentElement.getAttribute('data-theme')

        const headerImage = theme === 'dark' ? 'headerIconDark.svg' : 'headerIcon.svg';
        document.querySelector('.headerIconWrapper').querySelector('img').src = imagePath + headerImage;

        const themeBtn = theme === 'dark' ? 'lightTheme.svg' : 'darkTheme.svg';
        document.querySelector('.themeBtn').src = imagePath + themeBtn;

        const closeBtn = theme === 'dark' ? 'closeIcoDark.svg' : 'closeIco.svg';
        document.querySelector('.settingVisionCloseBtn').src = imagePath + closeBtn;
        document.querySelector('.mobileMenuClose').src = imagePath + closeBtn;

        const menuArrow = theme === 'dark' ? 'menuArrowDark.svg' : 'menuArrow.svg'
        
        $('.mobileLink--img').attr('src', imagePath + menuArrow)
    }
    themeChangePictuge()


    // ���������� ���������� ���� ������ �������
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

         // ��������� ���������
         $('.mobileMenu-titleText').text(name)
         $('.mobileMenu-title').addClass('mobileMenu-title--show')
    }


    // ���������� ������� �� ������� ���������� ����
    $('.mobileMenuWrapper').on('click', '.mobileLink--extended', function() {
        secondLvlMobileMenu($(this).find('.mobileLink--text').text())
        themeChangePictuge()
    })


    // ���������� ������ "�����" � ��������� ����
    $('.mobileMenu-backBtn').on('click', function() {
        startFillMobileMenu()
        $('.mobileMenu-title').removeClass('mobileMenu-title--show')
        themeChangePictuge()
    }) 
    
    
   // �������
   const slides = $(".slide");
    const pgnItems = $(".pgnItem");

    let currentIndex = 0;
    let intervalId;

    function showSlide(index) {
      slides.css("opacity", 0);
      slides.eq(index).css("opacity", 1);

      pgnItems.removeClass("pgnItemCurrent").eq(index).addClass("pgnItemCurrent");
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    }

    function startAutoSlide() {
      intervalId = setInterval(nextSlide, 3000);
    }

    function stopAutoSlide() {
      clearInterval(intervalId);
    }

    pgnItems.on("click", function() {
      currentIndex = $(this).index();
      showSlide(currentIndex);
      stopAutoSlide();
      
      startAutoSlide();
    });

    showSlide(currentIndex);
    startAutoSlide();


    // ������
    $(document).ready(function() {
        $('.mobile_footer_wrapper__title').click(function(event) {
            $(this).toggleClass('active').next().slideToggle(300);
        })
    })

    
})