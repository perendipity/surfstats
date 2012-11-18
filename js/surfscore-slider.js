var activeTabs;
var dates = ['27<small>th</small> SUNDAY','2<small>nd</small> SATURDAY', '8<small>th</small> MONDAY', '16<small>th</small> TUESDAY', '19<small>th</small> FRIDAY', '20<small>th</small> SATURDAY',
             '21<small>st</small> SUNDAY', '23<small>rd</small> TUESDAY', '26<small>th</small> FRIDAY', '27<small>th</small> SATURDAY', '28<small>th</small> SUNDAY', '2<small>nd</small> FRIDAY']
function initializeSlider(tabContainer, sessionContainer) {
    //first we generate the session html
    numSessions = 12;
    for (var i = 0; i < numSessions; i++) {

        tabID = 'tab'+i;
        sessionID = 'session'+i;
        if (i < 1) activeFlag = 'active';
        else activeFlag = 'inactive';
        radical = 1 + Math.floor(Math.random() * 100);
        waves = 1 + Math.floor(Math.random() * 100);
        tricks = 1 + Math.floor(Math.random() * 100);
        rad1 = (1 + Math.floor(Math.random() * 100))/10;
        rad2 = (1 + Math.floor(Math.random() * 100))/10;
        rad3 = (1 + Math.floor(Math.random() * 100))/10;
        rad4 = (1 + Math.floor(Math.random() * 100))/10;
        session = '<div class="session '+activeFlag+'" id="'+sessionID+'">'+
                    '<div class="row-fluid">'+
                      '<div class="span1 offset1">'+
                        '<h2>Stats</h2>'+
                        '<h3>AVG RADICAL</h3> <h2 class="bignum">'+radical+'</h2>'+
                        '<h3>TOTAL WAVES</h3> <h2 class="bignum">'+waves+'</h2>'+
                        '<h3>TOTAL SET WAVES</h3> <h2 class="bignum">'+waves/5+'</h2>'+
                        '<h3>TOTAL TRICKS</h3> <h2 class="bignum">'+tricks+'</h2>'+
                      '</div>'+
                      '<div class="span10 row-fluid">'+
                        '<div class="span10 row-fluid" style="margin-left: 100px;">'+
                          '<div class="span3"><div class="red-circle">'+rad1+'</div></div>'+
                          '<div class="span7"><img class="stat-img" src="img/surfstats1.png" alt=""></div>'+
                        '</div>'+
                        '<div class="span10 row-fluid" style="margin-left: 100px;">'+
                          '<div class="span3"><div class="red-circle">'+rad2+'</div></div>'+
                          '<div class="span7"><img class="stat-img" src="img/surfstats2.png" alt=""></div>'+
                        '</div>'+
                        '<div class="span10 row-fluid" style="margin-left: 100px;">'+
                          '<div class="span3"><div class="red-circle">'+rad3+'</div></div>'+
                          '<div class="span7"><img class="stat-img" src="img/surfstats1.png" alt=""></div>'+
                        '</div>'+
                        /*'<div class="span10 row-fluid" style="margin-left: 100px;">'+
                          '<div class="span3"><div class="red-circle">'+rad4+'</div></div>'+
                          '<div class="span7"><img class="stat-img" src="img/surfstats2.png" alt=""></div>'+
                        '</div>'+ */
                      '</div>'+
                    '</div>'+
                  '</div>';

        tabText = '<h4>'+dates[i]+'</h4><h5>Cape Cod</h5>';
        tab = '<div class="span2 tab" id="'+tabID+'">'+tabText+'</div>';
        $('#'+sessionContainer).append(session);
        $('#'+tabContainer).append(tab);

        $('#'+tabID).click(function(){
          $(this).siblings().css({'border-bottom':'none', 'background-color':'inherit'});
          $(this).css({'border-bottom':'10px solid red', 'background-color':'white'});
          $(".session").css({'display':'none'});
          currentID = $(this).attr('id').substring(3);
          $('#session'+currentID).css({'display':'inherit'});
        });
        if (i >= 4) {
            $('#'+tabID).hide();
        }
    }

    activeTabs = [0,1,2,3];

 // now we need arrows that start out with no slide left, and slide right 4
        // sliding means activating the next 4 tabs and clearing the active session
        // and keeping track of the numbers (aka which are the next 4 to the right and left)

    $('#slide-left').click(function() {
      console.log('clicked');
      if (activeTabs[3]-4>0) {
        console.log('can go left');
        $('.tab').hide();
        var nextIDs = new Array();
        for (var i = 0; i < activeTabs.length; i++) {
          nextID = activeTabs[i] - 4;
          nextIDs.push(nextID)
          $('#tab'+nextID).show();
        }
        activeTabs = nextIDs;
        $('#tab'+activeTabs[0]).click();
      }

    })

    $('#slide-right').click(function() {
      console.log('clicked');
      if (activeTabs[3]+4<13) {
        console.log('can go right');
        $('.tab').hide();
        var nextIDs = new Array();
        for (var i = 0; i < activeTabs.length; i++) {
          nextID = activeTabs[i] + 4;
          nextIDs.push(nextID)
          $('#tab'+nextID).show();
        }
        activeTabs = nextIDs;
        $('#tab'+activeTabs[0]).click();
      }
    })

    $('#tab0').css({'margin-left': '2.564102564102564%'});
    $('#tab0').click();

}

function activateTabs(tabList) {
    // deactivate all tabs

}

$(document).ready(function() {
    tabContainer = "slider-tab-container";
    sessionContainer = "sessions";
    initializeSlider(tabContainer, sessionContainer);
});
