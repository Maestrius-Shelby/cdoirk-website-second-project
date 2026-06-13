var searchInput2 = document.querySelector('.i_search');
var searchResults = document.getElementById('search-results');
var pages = [
  { title: "Главная страница", url: "http://ssuwt-center-new/index.php" },
  { title: "Main page", url: "http://ssuwt-center-new/index.php" },
  { title: "Professional retraining programs", url: "http://ssuwt-center-new/program_catalog.php" },
  { title: "Программы профессиональной переподготовки", url: "http://ssuwt-center-new/program_catalog.php" },
  { title: "Каталог программ", url: "http://ssuwt-center-new/about_center.php" },
  { title: "Program catalog", url: "http://ssuwt-center-new/about_center.php" },

  //ОГЭ
  { title: "ОГЭ по русскому языку", url: "http://ssuwt-center-new/OGE_Russkiy_Yazyk.php" },
  { title: "OGE in Russian language", url: "http://ssuwt-center-new/OGE_Russkiy_Yazyk.php" },
  { title: "ОГЭ по математике", url: "http://ssuwt-center-new/OGE_Math.php" },
  { title: "OGE in mathematics", url: "http://ssuwt-center-new/OGE_Math.php" },
  { title: "ОГЭ по информатике и ИКТ", url: "http://ssuwt-center-new/OGE_Informatika_I_IKT.php" },
  { title: "OGE in computer science and ICT", url: "http://ssuwt-center-new/OGE_Informatika_I_IKT.php" },

  //ЕГЭ 
  { title: "ЕГЭ по русскому языку", url: "http://ssuwt-center-new/EGE_Russkiy_Yazyk.php" },
  { title: "(USE) Unified State Exam in Russian language", url: "http://ssuwt-center-new/EGE_Russkiy_Yazyk.php" },
  { title: "ЕГЭ по математике", url: "http://ssuwt-center-new/EGE_Math.php" },
  { title: "(USE) Unified State Exam in mathematics", url: "http://ssuwt-center-new/EGE_Math.php" }, 
  { title: "ЕГЭ по информатике и ИКТ", url: "http://ssuwt-center-new/EGE_Informatika_I_IKT.php" },
  { title: "(USE) Unified State Exam in computer science and ICT", url: "http://ssuwt-center-new/EGE_Informatika_I_IKT.php" },
  { title: "ЕГЭ по физике", url: "http://ssuwt-center-new/EGE_Fizika.php" },
  { title: "(USE) Unified State Exam in physics", url: "http://ssuwt-center-new/EGE_Fizika.php" },
  { title: "ЕГЭ по обществознанию", url: "http://ssuwt-center-new/EGE_Obshchestvoznaniye.php" },
  { title: "(USE) Unified State Exam in social studies", url: "http://ssuwt-center-new/EGE_Obshchestvoznaniye.php" },

  //Общеобразовательные программы
  { title: "Английский для начинающих", url: "http://ssuwt-center-new/General_English.php" },
  { title: "English for beginners", url: "http://ssuwt-center-new/General_English.php" },
  { title: "Компьютерная грамотность для начинающих", url: "http://ssuwt-center-new/Komp_Gram.php" },
  { title: "Computer literacy for beginners", url: "http://ssuwt-center-new/Komp_Gram.php" },
  { title: "От журналистики к блогерству", url: "http://ssuwt-center-new/Bloger.php" },
  { title: "From journalism to blogging", url: "http://ssuwt-center-new/Bloger.php" },

  //Программы повышения квалификации

  //1
  { title: "Общие вопросы охраны труда", url: "http://ssuwt-center-new/Ohrana_truda.php" },
  { title: "General issues of labor protection", url: "http://ssuwt-center-new/Ohrana_truda.php" },
  //2
  { title: "Рекрутер и инструменты подбора персонала", url: "http://ssuwt-center-new/Recruitment.php" },
  { title: "Recruiter and recruitment tools", url: "http://ssuwt-center-new/Recruitment.php" },
  //3
  { title: "Бережливое производство", url: "http://ssuwt-center-new/Ber_pro.php" },
  { title: "Lean manufacturing", url: "http://ssuwt-center-new/Ber_pro.php" },
  //4
  { title: "Основы инклюзивного образования", url: "http://ssuwt-center-new/Inclusiv.php" },
  { title: "Fundamentals of Inclusive Education", url: "http://ssuwt-center-new/Inclusiv.php" },
  //5
  { title: "Принципы организации и оказания первой помощи", url: "http://ssuwt-center-new/First_aid.php" },
  { title: "Principles of organization and first aid", url: "http://ssuwt-center-new/First_aid.php" },
  //6
  { title: "Web-дизайн. Визуальное оформление и верстка сайта", url: "http://ssuwt-center-new/Web_design.php" },
  { title: "Web design. Visual design and layout of the site", url: "http://ssuwt-center-new/Web_design.php" },
  //7
  { title: "Astra Linux для пользователей", url: "http://ssuwt-center-new/Astra_linux.php" },
  { title: "Astra Linux for users", url: "http://ssuwt-center-new/Astra_linux.php" },
  //8
  { title: "Машинист специального крана", url: "http://ssuwt-center-new/Mashine.php" },
  { title: "Special crane operator", url: "http://ssuwt-center-new/Mashine.php" },
  //9
  { title: "Оператор конвейера", url: "http://ssuwt-center-new/Operator.php" },
  { title: "Conveyor operator", url: "http://ssuwt-center-new/Operator.php" },
  //10
  { title: "Подготовка стропальщиков", url: "http://ssuwt-center-new/Strop.php" },
  { title: "Training of slingers", url: "http://ssuwt-center-new/Strop.php" },
  //11
  { title: "Оборудование и технология сварочного производства", url: "http://ssuwt-center-new/Svarka.php" },
  { title: "Equipment and technology of welding production", url: "http://ssuwt-center-new/Svarka.php" },


  //Программы профессиональной переподготовки

  { title: "Подготовка, сборка, сварка и зачистка после сварки сварных швов элементов конструкции (изделий, узлов, деталей)", url: "http://ssuwt-center-new/Podgotovka_svar.php" },
  { title: "Preparation, assembly, welding and cleaning after welding of welded seams of structural elements (products, assemblies, parts)", url: "http://ssuwt-center-new/Podgotovka_svar.php" },
  
  { title: "Новости и анонсы", url: "http://ssuwt-center-new/News_and_Announs.php" },
  { title: "News and announcements", url: "http://ssuwt-center-new/News_and_Announs.php" },

  { title: "Преподавательский состав", url: "http://ssuwt-center-new/teachers.php" },
  { title: "Teaching staff", url: "http://ssuwt-center-new/teachers.php" },
  { title: "Галерея", url: "http://ssuwt-center-new/gallery.php" },
  { title: "Gallery", url: "http://ssuwt-center-new/gallery.php" },
  { title: "Документы", url: "http://ssuwt-center-new/documents.php" },
  { title: "Documents", url: "http://ssuwt-center-new/documents.php" },
  { title: "О центре", url: "http://ssuwt-center-new/about_center.php" },
  { title: "About center", url: "http://ssuwt-center-new/about_center.php" },
  { title: "Федеральный закон № 273 от 29.12.2012 “Об образовании в Российской Федерации“", url: "https://sgugit.ru/additional-educations/about-us/normative-documents/%D0%A4%D0%B5%D0%B4%D0%B5%D1%80%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%97%D0%B0%D0%BA%D0%BE%D0%BD%20%E2%84%96%20273%20%D0%BE%D1%82%2029.12.2012%20%D0%9E%D0%B1%20%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B8%20%D0%B2%20%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B9%20%D0%A4%D0%B5%D0%B4%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%B8.pdf" },
  { title: "Federal Law No. 273 of December 29, 2012 “On Education in the Russian Federation”", url: "https://sgugit.ru/additional-educations/about-us/normative-documents/%D0%A4%D0%B5%D0%B4%D0%B5%D1%80%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%97%D0%B0%D0%BA%D0%BE%D0%BD%20%E2%84%96%20273%20%D0%BE%D1%82%2029.12.2012%20%D0%9E%D0%B1%20%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B8%20%D0%B2%20%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B9%20%D0%A4%D0%B5%D0%B4%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%B8.pdf" },
  { title: "Федеральный закон № 152-ФЗ от 27.07.2006 “О персональных данных“", url: "https://sgugit.ru/additional-educations/about-us/normative-documents/%D0%A4%D0%B5%D0%B4%D0%B5%D1%80%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%B7%D0%B0%D0%BA%D0%BE%D0%BD%20%D0%BE%D1%82%2027.07.2006%20%E2%84%96%20152-%D0%A4%D0%97%20%D0%9E%20%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85%20%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85.pdf" },
  { title: "Federal Law No. 152-FZ of July 27, 2006 “On Personal Data”", url: "https://sgugit.ru/additional-educations/about-us/normative-documents/%D0%A4%D0%B5%D0%B4%D0%B5%D1%80%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%B7%D0%B0%D0%BA%D0%BE%D0%BD%20%D0%BE%D1%82%2027.07.2006%20%E2%84%96%20152-%D0%A4%D0%97%20%D0%9E%20%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85%20%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85.pdf" },
  { title: "Приказ № 499 от 01.07.2013 “Об утверждении порядка организации и осуществления образовательной деятельности по дополнительным профессиональным программам“", url: "https://sgugit.ru/additional-educations/about-us/normative-documents/%D0%9F%D1%80%D0%B8%D0%BA%D0%B0%D0%B7%20%E2%84%96%20499.pdf" },
  { title: 'Order No. 499 of July 1, 2013 “On approval of the procedure for organizing and implementing educational activities in additional professional programs "', url: "https://sgugit.ru/additional-educations/about-us/normative-documents/%D0%9F%D1%80%D0%B8%D0%BA%D0%B0%D0%B7%20%E2%84%96%20499.pdf" },
  { title: "Приказ № 816 от 23 марта 2017 “Об утверждении Порядка применения организациями, осуществляющими образовательную деятельность, электронного обучения, дистанционных образовательных технологий при реализации образовательных программ“", url: "https://sgugit.ru/additional-educations/about-us/normative-documents/%D0%9F%D1%80%D0%B8%D0%BA%D0%B0%D0%B7%20%E2%84%96%20816.pdf" },
  { title: 'Order No. 816 of March 23, 2017 "On approval of the Procedure for the use of e-learning, distance educational technologies by organizations engaged in educational activities in the implementation of educational programs"', url: "https://sgugit.ru/additional-educations/about-us/normative-documents/%D0%9F%D1%80%D0%B8%D0%BA%D0%B0%D0%B7%20%E2%84%96%20816.pdf" },
  { title: "Устав ФГБОУ ВО «Сибирский государственный университет водного транспорта» (утвержден распоряжением Росморречфлота №АД-369-р от 22 сентября 2014 года)", url: "https://www.ssuwt.ru/images/files/ustav/ustav-2014.pdf" },
  { title: 'Charter of the FSBEI HE "Siberian State University of Water Transport" (approved by order of Rosmorrechflot No. AD- 369-r dated September 22, 2014)', url: "https://www.ssuwt.ru/images/files/ustav/ustav-2014.pdf" },
  { title: "Изменения Устава ФГБОУ ВО «Сибирский государственный университет водного транспорта» (утверждены распоряжением Росморречфлота АП-7-р от 19 января 2015 года)", url: "https://www.ssuwt.ru/images/files/ustav/izm-ustav-2015.pdf" },
  { title: 'Changes to the Charter of the FSBEI HE "Siberian State University of Water Transport" (approved by Rosmorrechflot order AP-7-r dated January 19, 2015) Changes to the Charter of the FSBEI HE "', url: "https://www.ssuwt.ru/images/files/ustav/izm-ustav-2015.pdf" },
  { title: "Изменения Устава ФГБОУ ВО «Сибирский государственный университет водного транспорта» (утверждены распоряжением Росморречфлота № ВО-86-р от 3 апреля 2018 года)", url: "https://www.ssuwt.ru/images/files/ustav/izm-ustav-2018.pdf" },
  { title: 'Siberian State University of Water Transport" (approved by Rosmorrechflot order No. VO-86-r dated April 3 2018)', url: "https://www.ssuwt.ru/images/files/ustav/izm-ustav-2018.pdf" },
  { title: "Изменения Устава ФГБОУ ВО «Сибирский государственный университет водного транспорта» (утверждены распоряжением Росморречфлота № АП-558-р от 10.12.2020 года)", url: "https://www.ssuwt.ru/images/files/ustav/izm-ustav-2020.pdf" },
  { title: 'Changes to the Charter of the Federal State Budgetary Educational Institution of Higher Education "Siberian State University of Water Transport" (approved by the order of Rosmorrechflot No. AP-558-r dated December 10, 2020)', url: "https://www.ssuwt.ru/images/files/ustav/izm-ustav-2020.pdf" },
  { title: "Лицензия на право ведения образовательной деятельности", url: "https://sgugit.ru/sveden/files/Licen_17.3.15.pdf" },
  { title: "License for the right to conduct educational activities", url: "https://sgugit.ru/sveden/files/Licen_17.3.15.pdf" },
  { title: "Документы, необходимые для поступления", url: "https://www.ssuwt.ru/abiturient/2023/dokumenty-dlya-postupleniya" },
  { title: "Documents required for admission", url: "https://www.ssuwt.ru/abiturient/2023/dokumenty-dlya-postupleniya" },
  { title: "Инструкция по оформлению документов", url: "https://kc.hse.ru/wp-content/uploads/2023/01/instrukciya-po-oformleniyu-dokumentov.pdf" },
  { title: "Instructions for paperwork", url: "https://kc.hse.ru/wp-content/uploads/2023/01/instrukciya-po-oformleniyu-dokumentov.pdf" },
];

function search(event) {
  event.preventDefault(); 

  var query = searchInput2.value.trim().toLowerCase(); 
  searchResults.innerHTML = '';

  if (query.length > 0) {
    var results = pages.filter(function(page) {
      return page.title.toLowerCase().includes(query);
    });

    if (results.length > 0) {
      results.forEach(function(result, index) {
        var li = document.createElement('li');
        var a = document.createElement('a');
        a.textContent = result.title;
        a.href = result.url;
        li.appendChild(a);
        li.innerHTML = (index + 1) + '. ' + li.innerHTML;
        searchResults.appendChild(li);
      });
    } else {
      var li = document.createElement('li');
      li.textContent = 'Ничего не найдено';
      li.style.textAlign = 'center';
      searchResults.appendChild(li);
    }
  } else {
    
    searchResults.innerHTML = '';
  }
}

function showBlurEffect() {
  var blurEffect = document.createElement('div');
  blurEffect.classList.add('blur-effect');
  document.body.appendChild(blurEffect);

  setTimeout(function() {
    blurEffect.remove();
  }, 1000);
}

searchInput2.addEventListener('input', search);

document.addEventListener('DOMContentLoaded', function() {
  var searchValue = localStorage.getItem('searchValue');

  if (searchValue) {
    searchInput2.value = searchValue;
    searchInput2.dispatchEvent(new Event('input')); 
  } else {
    searchInput2.value = '';
    searchInput2.dispatchEvent(new Event('input')); 
  }

  
  localStorage.removeItem('searchValue');
});

document.querySelector('.f_search').addEventListener('submit', function(e) {
  e.preventDefault();
var searchValue = searchInput2.value.trim();
localStorage.setItem('searchValue', searchValue);
searchInput2.dispatchEvent(new Event('input')); 

showBlurEffect(); 
});

function showBlurEffect() {
var blurEffect = document.createElement('div');
blurEffect.classList.add('blur-effect');

var loader = document.createElement('div');
loader.classList.add('loader');

blurEffect.appendChild(loader);
document.body.appendChild(blurEffect);

setTimeout(function() {
  blurEffect.remove();
}, 1000);
}


