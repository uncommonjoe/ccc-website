angular.module('ccc')
    .controller('signupListController', ['$http',
        function($http, ) {
            var vm = this;

            vm.isLoading = true;
            vm.deleteSignup = deleteSignup;
            vm.swapServices = swapServices;

            initial();

            function initial() {
                vm.isLoading = true;
                var config = {
                    method: 'POST',
                    url: '/attendees-get',
                    //url: '/cornerstone/attendees-get',
                };

                var request = $http(config);
                request.then(function(response) {
                    vm.attendees = response.data;
                    console.log(vm.attendees);
                    vm.isLoading = false;
                });
            }

            function deleteSignup(id) {
                vm.isLoading = true;

                var config = {
                    method: 'POST',
                    url: '/attendees-delete',
                    //url: '/cornerstone/attendees-delete',
                    data: id,
                };

                var request = $http(config);
                request.then(function(response) {
                    vm.deleted = response.data;

                    initial();
                    vm.isLoading = false;
                });
            }

            function swapServices(id) {
                vm.isLoading = true;

                var config = {
                    method: 'POST',
                    url: '/attendees-swap',
                    //url: '/cornerstone/attendees-swap',
                    data: id,
                };

                var request = $http(config);
                request.then(function(response) {
                    vm.swapped = response.data;

                    initial();
                    vm.isLoading = false;
                });
            }
        }
    ]);