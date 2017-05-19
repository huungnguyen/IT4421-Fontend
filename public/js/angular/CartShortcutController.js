var CartShortcutController = CartBaseController.extend({

    initialize : function($super,service, $scope, $rootScope) {
        var self = this;
        $super(service);
        self.getCart();
        this.$rootScope = $rootScope;
        $scope.$on('loadingCart', function (event, args) {
           self.getCart();
        });

    },

}, ['CartBaseService', "$scope", "$rootScope"]);
myApp.controller('CartShortcutController', CartShortcutController);