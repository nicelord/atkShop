//  Build our app module, with a dependency on the angular modal service.
var app = angular.module('atkApp', ['angularModalService']);

app.controller('modalController', ['$scope', 'ModalService', function($scope, ModalService) {
    $scope.showyesno = function() {

        ModalService.showModal({
            templateUrl: "../views/modalTemplate.html",
            controller: "modalController"
        }).then(function(modal) {
            modal.element.modal();
        });

    };

}]);