thailuxuryApp.directive('cardViewer', function($timeout) {

    return {
      templateUrl: 'app/shared/slide/view.html',
      link: function(scope, element, attr) {
        scope.toLeft = false;
        scope.toRight = false;

        scope.displayCard = 1;

        //when press prev, card slide to left
        scope.prev = function() {
          scope.toRight = false;
          scope.toLeft = true;

          if (scope.displayCard == 1) {
            scope.displayCard = 6
          } else {
            scope.displayCard -= 1;
          }
        };

        scope.prevFixed = function() {
          scope.toRight = false;
          scope.toLeft = true;

          // need to do this in a $timeout so ngClass has 
          // chance to update the current image's class based 
          // on the new toLeft and toRight settings before
          // ngSwitch acts on the new displayCard setting
          // and destroys the current images's scope.
          $timeout(function () {
            if (scope.displayCard == 1) {
              scope.displayCard = 6
            } else {
              scope.displayCard -= 1;
            }
          }, 0);
        };

        //when press prev, card slide to right
        scope.next = function() {
          scope.toLeft = false;
          scope.toRight = true;

          if (scope.displayCard == 6) {
            scope.displayCard = 1
          } else {
            scope.displayCard += 1;
          }
        };

        scope.nextFixed = function() {
          scope.toLeft = false;
          scope.toRight = true;

          $timeout(function () {
            //loop
            if (scope.displayCard == 6) {
              scope.displayCard = 1
            } else {
              scope.displayCard += 1;
            }
          }, 0);
        };

        scope.goto = function(index){
          if(index != scope.displayCard){
            if(scope.displayCard > index){
              scope.toLeft = true;
              scope.toRight = false;
            }else{
              scope.toLeft = false;
              scope.toRight = true;
            }

              $timeout(function () {
                  scope.displayCard = index;
            }, 0);
          }
        };

        scope.active = function(index){
          return index == scope.displayCard ? 'active' : '';
        }

        setInterval(function(){ 
           scope.nextFixed();
         }, 5000);

      }
    }
  });