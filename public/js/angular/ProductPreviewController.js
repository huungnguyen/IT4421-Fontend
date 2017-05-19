var ProductPreviewController = BaseController.extend({

    initialize : function($super,service, $scope) {
        $super(service);
        this.$scope = $scope;
        var self = this;
        $scope.$on('showProductPreview', function (event, args) {
            self.product = args.data.product;
            self.variants = args.data.variants;
            self.listOptions = [];
            var listOptions = self.product.options.split(",");
            _.each(listOptions, function (option) {
                var variant = self.getVariantDefault(option);
               self.listOptions.push({name: option, value: variant.value});
            });
            self.getPriceProduct();
            self.quantity = 1;
        });
    },

    getListValueOfOption: function (optionName) {
        var listValueOption = [];
        _.each(this.variants, function(variant){
            _.each(variant.properties, function (properties) {
                if (properties.name == optionName){
                    listValueOption.push(properties.value);
                }
            })
        });
        return _.union(listValueOption);
    },

    getVariantDefault: function (optionName) {
        var value = "";;
        _.each(this.variants, function(variant){
            _.each(variant.properties, function (properties) {
                if (properties.name == optionName && variant.inventory > 0){
                    value = properties.value;
                    return;
                }
            })
        });
        return {value: value};
    },

    closeModel: function () {
        var self = this;
        self.product = undefined;
        self.variants = undefined;
        self.listOptions = undefined;
    },

    getPriceProduct: function () {
        var self = this;
          _.each(this.variants, function(variant) {
              if(JSON.stringify(variant.properties) == JSON.stringify(self.listOptions)){
                  self.price = variant.selling_price;
                  self.inventory = variant.inventory;
                  self.variant_id = variant.id;
              }
          });
    },

    chooseVariant: function (variant) {
        this.getPriceProduct();
    },

    addCart: function () {
        var data = {
            product_id : this.product.id,
            product: this.product,
            properties: this.listOptions,
            price: this.price,
            quantity: this.quantity,
            variant_id: this.variant_id,
            total: this.quantity * this.price,
            image: this.product.images[0]
        };
        this.service.addCart(data)
            .success(function (response) {
                window.location.href = "/cart";
            })
            .error(function (error) {

            });
    }

}, ['BaseService', "$scope"]);
myApp.controller('ProductPreviewController', ProductPreviewController);