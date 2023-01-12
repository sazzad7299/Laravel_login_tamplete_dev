$('aside.sidebar > ul > li').mouseenter(function () {
  // Loop through the contents and get the height;
  var tH = 0;
  var i = 0;

  $(this)
    .find('ul.sb_dropdown > li')
    .each(function () {
      tH = tH + $(this).outerHeight();
      console.log($(this).outerHeight());
    });
  $(this).addClass('opened');
  $(this)
    .find('ul.sb_dropdown')
    .css('height', tH + 20);
  $(this).find('ul.sb_dropdown').css('padding-top', 10);
});

$('aside.sidebar > ul > li').mouseleave(function () {
  $(this).removeClass('opened');
  $(this).find('ul.sb_dropdown').css('padding-top', '');
  $(this).find('ul.sb_dropdown').css('height', '');
});
