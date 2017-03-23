<html>
	<script>
		angular
  .module('MyApp',['ngMaterial', 'ngMessages', 'material.svgAssetsCache'])
  .controller('AppCtrl', function ($scope, $timeout, $mdSidenav, $log) {
    $scope.toggleLeft = buildDelayedToggler('left');
    $scope.toggleRight = buildToggler('right');
    $scope.isOpenRight = function(){
      return $mdSidenav('right').isOpen();
    };

    /**
     * Supplies a function that will continue to operate until the
     * time is up.
     */
    function debounce(func, wait, context) {
      var timer;

      return function debounced() {
        var context = $scope,
            args = Array.prototype.slice.call(arguments);
        $timeout.cancel(timer);
        timer = $timeout(function() {
          timer = undefined;
          func.apply(context, args);
        }, wait || 10);
      };
    }

    /**
     * Build handler to open/close a SideNav; when animation finishes
     * report completion in console
     */
    function buildDelayedToggler(navID) {
      return debounce(function() {
        // Component lookup should always be available since we are not using `ng-if`
        $mdSidenav(navID)
          .toggle()
          .then(function () {
            $log.debug("toggle " + navID + " is done");
          });
      }, 200);
    }

    function buildToggler(navID) {
      return function() {
        // Component lookup should always be available since we are not using `ng-if`
        $mdSidenav(navID)
          .toggle()
          .then(function () {
            $log.debug("toggle " + navID + " is done");
          });
      };
    }
  })
  .controller('LeftCtrl', function ($scope, $timeout, $mdSidenav, $log) {
    $scope.close = function () {
      // Component lookup should always be available since we are not using `ng-if`
      $mdSidenav('left').close()
        .then(function () {
          $log.debug("close LEFT is done");
        });

    };
  })
  .controller('RightCtrl', function ($scope, $timeout, $mdSidenav, $log) {
    $scope.close = function () {
      // Component lookup should always be available since we are not using `ng-if`
      $mdSidenav('right').close()
        .then(function () {
          $log.debug("close RIGHT is done");
        });
    };
  });


		</script>
	<body>

<div ng-controller="AppCtrl" layout="column" style="height:500px;" ng-cloak="" class="sidenavdemoBasicUsage" ng-app="MyApp">

  <section layout="row" flex="">

    <md-sidenav class="md-sidenav-left" md-component-id="left" md-is-locked-open="$mdMedia('gt-md')" md-whiteframe="4">

      <md-toolbar class="md-theme-indigo">
        <h1 class="md-toolbar-tools">Sidenav Left</h1>
      </md-toolbar>
      <md-content layout-padding="" ng-controller="LeftCtrl">
        <md-button ng-click="close()" class="md-primary" hide-gt-md="">
          Close Sidenav Left
        </md-button>
        <p hide="" show-gt-md="">
          This sidenav is locked open on your device. To go back to the default behavior,
          narrow your display.
        </p>
      </md-content>

    </md-sidenav>

    <md-content flex="" layout-padding="">

      <div layout="column" layout-align="top center">
        <p>
        The left sidenav will 'lock open' on a medium (=960px wide) device.
        </p>
        <p>
        The right sidenav will focus on a specific child element.
        </p>

        <div>
          <md-button ng-click="toggleLeft()" class="md-primary" hide-gt-md="">
            Toggle left
          </md-button>
        </div>

        <div>
          <md-button ng-click="toggleRight()" ng-hide="isOpenRight()" class="md-primary">
            Toggle right
          </md-button>
        </div>
      </div>

      <div flex=""></div>

    </md-content>

    <md-sidenav class="md-sidenav-right md-whiteframe-4dp" md-component-id="right">

      <md-toolbar class="md-theme-light">
        <h1 class="md-toolbar-tools">Sidenav Right</h1>
      </md-toolbar>
      <md-content ng-controller="RightCtrl" layout-padding="">
        <form>
          <md-input-container>
            <label for="testInput">Test input</label>
            <input type="text" id="testInput" ng-model="data" md-autofocus="">
          </md-input-container>
        </form>
        <md-button ng-click="close()" class="md-primary">
          Close Sidenav Right
        </md-button>
      </md-content>

    </md-sidenav>

  </section>

</div>
</body>
</html>
