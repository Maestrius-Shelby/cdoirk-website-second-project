(function($) {
  function setChecked(target) {
      var checkedRadio = $(target).find("input[type='radio']:checked");
      var selectedText = checkedRadio.siblings("span").text();
      if (checkedRadio.length) {
          $(target).find('select option:first').html(selectedText);
          if (selectedText === 'Для взрослых') {
              $('.additional-checkboxes').css('display', 'block');
              $('.additional-checkboxes-2').css('display', 'none');
              $('.custom-radio-select-popup').css('display', 'none');
          } else if (selectedText === 'Для школьников, студентов, курсантов') {
              $('.additional-checkboxes').css('display', 'none');
              $('.additional-checkboxes-2').css('display', 'block');
              $('.custom-radio-select-popup').css('display', 'none');
          } else {
              $('.additional-checkboxes').css('display', 'none');
              $('.additional-checkboxes-2').css('display', 'none');
              $('.custom-radio-select-popup').css('display', 'block');
          }
      } else {
          $(target).find('select option:first').html('Выберите категорию');
          $('.additional-checkboxes').css('display', 'none');
          $('.additional-checkboxes-2').css('display', 'none');
          $('.custom-radio-select-popup').css('display', 'block');
      }
      
  }

  $.fn.customRadioSelect = function() {
      this.wrapInner('<div class="custom-radio-select-popup"></div>');
      this.prepend(
          '<div class="custom-radio-select-control">' +
              '<select class="form-control"><option></option></select>' +
              '<div class="custom-radio-select-over"></div>' +
          '</div>'
      );

      this.each(function(){
          setChecked(this);
      });
      this.find('input[type="radio"]').click(function(){
          setChecked($(this).parents('.custom-radio-select'));
      });

      this.parent().find('.custom-radio-select-control').on('click', function(){
          $popup = $(this).next();
          $('.custom-radio-select-popup').not($popup).css('display', 'none');
          if ($popup.is(':hidden')) {
              $popup.css('display', 'block');
              $(this).find('select').focus();
          } else {
              $popup.css('display', 'none');
          }
      });

      $('html, body').on('click', function(e){
          if ($(e.target).closest('.custom-radio-select').length == 0){
              $('.custom-radio-select-popup').css('display', 'none');
          }
      });
  };
})(jQuery);

$('.custom-radio-select').customRadioSelect();

(function($) {
  function setChecked(target) {
      var checked = $(target).find("input[type='checkbox']:checked").length;
      if (checked) {
          $(target).find('select option:first').html('Выбрано: ' + checked);
      } else if ($('#educational-programs-checkbox').is(':checked')) {
          if ($(target).hasClass('additional-checkboxes')) {
              $(target).find('select option:first').html('Программы повышения квалификации');
          } else if ($(target).hasClass('additional-checkboxes-2')) {
              $(target).find('select option:first').html('Общеобразовательные программы');
          }
      } else if ($(target).hasClass('additional-checkboxes')) {
          $(target).find('select option:first').html('Программы повышения квалификации');
      } else if ($(target).hasClass('additional-checkboxes-2')) {
          $(target).find('select option:first').html('Общеобразовательные программы');
      } else {
          $(target).find('select option:first').html('Выберите категорию');
      }
      
  }

  $.fn.checkselect = function() {
      this.wrapInner('<div class="checkselect-popup"></div>');
      this.prepend(
          '<div class="checkselect-control">' +
          '<select class="form-control"><option></option></select>' +
          '<div class="checkselect-over"></div>' +
          '</div>'
      );

      this.each(function () {
          setChecked(this);
      });
      this.find('input[type="checkbox"]').click(function () {
          setChecked($(this).parents('.checkselect'));
      });

      // Обработка события изменения состояния чекбокса "Общеобразовательные программы"
      $('#educational-programs-checkbox').change(function () {
          $('.checkselect').each(function () {
              setChecked(this);
          });
      });

      this.parent().find('.checkselect-control').on('click', function () {
          $popup = $(this).next();
          $('.checkselect-popup').not($popup).css('display', 'none');
          if ($popup.is(':hidden')) {
              $popup.css('display', 'block');
              $(this).find('select').focus();
          } else {
              $popup.css('display', 'none');
          }
      });

      $('html, body').on('click', function (e) {
          if ($(e.target).closest('.checkselect').length == 0) {
              $('.checkselect-popup').css('display', 'none');
          }
      });
  };

// Функция для установки ширины поля и выпадающего меню в зависимости от ширины окна
function setWidth() {
  var windowWidth = $(window).width();
  var selectField = $('.custom-radio-select-control select');
  var selectPopup = $('.custom-radio-select-popup');

  // Если ширина окна меньше или равна 470px
  if (windowWidth <= 470) {
      // Устанавливаем ширину поля и выпадающего меню в 200px
      selectField.css('width', '200px');
      selectPopup.css('width', '200px');
  } else if (windowWidth <= 670) {
      // Для ширины окна в 470px-670px устанавливаем ширину в 250px
      selectField.css('width', '300px');
      selectPopup.css('width', '300px');
  } else if (windowWidth <= 765) {
      // Для ширины окна в 670px-765px устанавливаем ширину в 200px
      selectField.css('width', '500px');
      selectPopup.css('width', '500px');
  } else if (windowWidth <= 840) {
      // Для ширины окна в 765px-840px устанавливаем ширину в 250px
      selectField.css('width', '285px');
      selectPopup.css('width', '285px');
  } else {
      // Вернемся к изначальным значениям
      selectField.css('width', '');
      selectPopup.css('width', '');
  }
}

// Вызывайте функцию setWidth при загрузке страницы и при изменении размера окна
$(document).ready(function () {
  setWidth();
});

$(window).on('resize', function () {
  setWidth();
});

// Функция для установки ширины выпадающего меню
function setWidthForAdditionalMenus() {
  var windowWidth = $(window).width();
  var additionalMenuItems = $('.additional-checkboxes select, .additional-checkboxes-2 select');

  // Если ширина окна меньше или равна 470px
  if (windowWidth <= 470) {
      // Устанавливаем ширину выпадающего меню в 500px
      additionalMenuItems.css('width', '200px');
  } else if (windowWidth <= 670) {
      // Для ширины окна в 470px-670px устанавливаем ширину в 285px
      additionalMenuItems.css('width', '300px');
  } else if (windowWidth <= 765) {
      // Для ширины окна в 670px-765px устанавливаем ширину в 250px
      additionalMenuItems.css('width', '500px');
  } else if (windowWidth <= 840) {
      // Для ширины окна в 765px-840px устанавливаем ширину в 250px
      additionalMenuItems.css('width', '285px');
  } else {
      // Вернемся к изначальным значениям
      additionalMenuItems.css('width', '');
  }
}

// Вызывайте функцию setWidthForAdditionalMenus при загрузке страницы и при изменении размера окна
$(document).ready(function () {
  setWidthForAdditionalMenus();
});

$(window).on('resize', function () {
  setWidthForAdditionalMenus();
});


})(jQuery);

$('.checkselect').checkselect();
