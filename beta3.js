angular.module("app", [])
.controller('MainCtrl', function ($scope)
{
    $scope.countryCurrency = "";
    $scope.outputCountry = "";
    $scope.countries = [
        {
            name: "Sweden",
            currency: "SEK"
        },
        {
            name: "United States",
            currency: "USD"
        }
    ];
    $scope.selected = {
        country: $scope.countries[0].name
    };

    $scope.$watch("selected.country", function()
    {
        var country = $scope.countries.find(function(country)
        {
            return country.name == $scope.selected.country;
        });

        if(country)
        {
            $scope.outputCountry = country.name + country.currency;
            $scope.countryCurrency = country.currency;
        }
        else
        {
            $scope.outputCountry = "";
            $scope.countryCurrency = "";
        }
    });

    $scope.$watch("countryCurrency", function()
    {
        var country = $scope.countries.find(function(country)
        {
            return country.currency == $scope.countryCurrency.toUpperCase().trim();
        });

        if(country)
        {
            $scope.outputCountry = country.name + $scope.countryCurrency;
            $scope.selected.country = country.name;
        }
        else
        {
            $scope.outputCountry = "";
        }
    });
});