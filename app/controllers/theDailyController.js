angular.module('ccc')
    .controller('theDailyController', ['$http', '$interval',
        function($http, $interval) {
            var vm = this;

            var day = new Date();
            var hour = new Date().getHours();
            var minutes = new Date().getMinutes();

            vm.time = hour + ':' + minutes;
            vm.isLoading = true;

            initial();

            function checkLive() {
                var config = {
                    method: 'POST',
                    url: 'login-api.php',
                    data: vm.login,
                };

                var request = $http(config);
                request.then(function(response) {
                    vm.response = response.data;

                    if (vm.response == 'live') {
                        vm.isLoading = false;
                        $interval.cancel(promise);
                        $window.location.reload();
                    } else {
                        vm.isLoading = false;
                        vm.message = 'Not live';
                    }
                });
            }

            function initial() {
                // 0 = Monday, 2 = Tuesday, etc. Sunday = 6
                if (day == 6 && hour == 9) {
                    vm.today = "Sunday!";
                    $interval(function() {
                        checkLive();
                    }, 120000);
                } else {
                    vm.today = "Not sunday :(";
                    console.log(vm.today);
                }
            }

        }
    ]);