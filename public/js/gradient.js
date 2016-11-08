var uiGradientsUrl = 'https://cdn.rawgit.com/Ghosh/uiGradients/master/gradients.json';

var html   = $('html'),
    helper = $('.helper'),
    title  = $('.title'),
    gradientsList,
    activeGradient,
    i = 0;

$.getJSON(uiGradientsUrl, function(data) {
  gradientsList = data;
  // Shuffle Array
  gradientsList.sort(function() { return 0.5 - Math.random() });
});

var bgChangeInterval = setInterval(function(){
  // Get gradient
  activeGradient = gradientsList[i];

  // Create link to uigradients.com
  var link = 'http://uigradients.com/#' + activeGradient.name.replace(/\s+/g, '');
  title.html(activeGradient.name + '<br><small><a href="'+link+'">'+link+'</a></small>');

  // Flip target for transition
  var target = html;
  helper.removeClass('active');

  if (i%2 == 0){
    target = helper;
    html.removeClass('active');
  }

  // Set new gradient
  target.css({
    'background' : activeGradient.colors[0] ,
    'background' : 'linear-gradient(to left, ' + activeGradient.colors[0] + ' ,' + activeGradient.colors[1] + ')'
  }).addClass('active');

  // Set i to next i - if not the last one
  i = ( gradientsList.length < i ? 0 : i);
  i++;

}, 1500);
