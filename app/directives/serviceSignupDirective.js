angular.module('ccc')
    .directive('serviceSignup', ['$http', '$location', '$anchorScroll',
        function($http, $location, $anchorScroll) {
            return {
                restrict: 'E',
                templateUrl: '../wp-content/themes/CCC/app/directives/serviceSignupDirective.html',
                //templateUrl: '../wp-content/themes/cornerstone-community-church/app/directives/serviceSignupDirective.html',
                controller: ['$scope', function($scope) {
                    //link: function($scope) {

                    $scope.firstServiceAttendees;
                    $scope.secondServiceAttendees;
                    $scope.maxAttendance = 100;
                    $scope.confirmed = false;
                    $scope.isLoading = true;

                    $scope.signup = {}
                    $scope.signup.people = 1;
                    $scope.submit = submit;
                    $scope.updateMaxValue = updateMaxValue;

                    initial();

                    function initial() {
                        // Checking database for Sunday signups
                        var config = {
                            method: 'POST',
                            url: '/attendees-get',
                            data: '',
                        };

                        var request = $http(config);

                        request.then(function(response) {
                            $scope.attendees = response.data;

                            updateVariables();
                            $scope.isLoading = false;
                        });
                        updateMaxValue();
                    }

                    function updateMaxValue() {
                        switch ($scope.signup.time) {
                            case '9 AM':
                                if ($scope.firstServiceAttendees >= 85) {
                                    $scope.maxLength = $scope.mostFull;
                                } else {
                                    $scope.maxLength = 15;
                                }
                                break;

                            case '11 AM':
                                if ($scope.secondServiceAttendees >= 85) {
                                    $scope.maxLength = $scope.mostFull;
                                } else {
                                    $scope.maxLength = 15;
                                }
                                break;

                            default:
                                $scope.maxLength = 15;
                        }
                    }

                    function submit() {
                        $scope.isLoading = true;

                        // Submit signup to database
                        var config = {
                            method: 'POST',
                            url: '/attendees-set',
                            data: $scope.signup,
                        };

                        var request = $http(config);

                        request.then(function(response) {
                            $scope.attendees = response.data;

                            updateVariables();

                            // TODO Send confirmation email

                            $scope.confirmed = true;
                            $scope.isLoading = false;
                            $location.hash('serviceSignup');
                            $anchorScroll();
                        });
                    }

                    function updateVariables() {
                        $scope.sunday = $scope.attendees[0].sunday;
                        $scope.firstServiceAttendees = $scope.attendees[0].firstService;
                        $scope.firstServiceLeft = $scope.maxAttendance - $scope.firstServiceAttendees;

                        $scope.secondServiceAttendees = $scope.attendees[0].secondService;
                        $scope.secondServiceLeft = $scope.maxAttendance - $scope.secondServiceAttendees;

                        $scope.mostFull = Math.min($scope.firstServiceLeft, $scope.secondServiceLeft);
                        $scope.servicesAreFull = $scope.firstServiceAttendees >= $scope.maxAttendance && $scope.secondServiceAttendees >= $scope.maxAttendance;
                    }
                }]
            };
        }
    ]);