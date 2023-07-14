
   <script>
        $(document).ready(function () {
            var crudServiceBaseUrl = "https://demos.telerik.com/kendo-ui/service",
                dataSource = new kendo.data.DataSource({
                    transport: {
                        read: {
                            url: crudServiceBaseUrl + "/detailproducts",
                            dataType: "jsonp"
                        },
                        update: {
                            url: crudServiceBaseUrl + "/detailproducts/Update",
                            dataType: "jsonp"
                        },
                        destroy: {
                            url: crudServiceBaseUrl + "/detailproducts/Destroy",
                            dataType: "jsonp"
                        },
                        parameterMap: function (options, operation) {
                            if (operation !== "read" && options.models) {
                                return { models: kendo.stringify(options.models) };
                            }
                        }
                    },
                    batch: true,
                    pageSize: 20,
                    autoSync: true,
                    aggregate: [{
                        field: "TotalSales",
                        aggregate: "sum"
                    }],
                    // group: {
                    //     field: "Category.CategoryName",
                    //     dir: "desc",
                    //     aggregates: [
                    //         { field: "TotalSales", aggregate: "sum" }
                    //     ]
                    // },
                    schema: {
                        model: {
                            id: "ProductID",
                            fields: {
                                ProductID: { editable: false, nullable: true },
                                Discontinued: { type: "boolean", editable: false },
                                TotalSales: { type: "number", editable: false },
                                TargetSales: { type: "number", editable: false },
                                LastSupply: { type: "date" },
                                UnitPrice: { type: "number" },
                                UnitsInStock: { type: "number" },
                                Category: {
                                    defaultValue: {
                                        CategoryID: 8,
                                        CategoryName: "Seafood"
                                    }
                                },
                                Country: {
                                    defaultValue: {
                                        CountryNameLong: "Bulgaria",
                                        CountryNameShort: "bg"
                                    }
                                }
                            }
                        }
                    }
                });

            $("#grid").kendoGrid({
                dataSource: dataSource,
                columnMenu: {
                    filterable: false
                },
                height: 680,
                editable: "incell",
                pageable: true,
                sortable: true,
                navigatable: true,
                resizable: true,
                reorderable: true,
                groupable: true,
                filterable: true,
                dataBound: onDataBound,
                toolbar: ["excel", "pdf","search","create"],
                columns: [{
                    field: "Merchant Name",
                    title: "Merchant Name",
                    // format: "{0:c}",
                    width: 105
                }, {
                    field: "Product Name",
                    title: "Product Name",
                    // template: "<span id='badge_#=ProductID#' class='badgeTemplate'></span>",
                    width: 130,
                }, {
                    field: "Quantity",
                    title: "Quantity",
                    editor: clientCategoryEditor,
                    // groupHeaderTemplate: "<div class='group-header'><span class='category-name'>Category:#=data.value#,TotalSales:#=kendo.format('{0:c}', aggregates.TotalSales.sum)#</span></div>",
                    width: 125
                }, {
                    field: "Passed quality check",
                    title: "Passed quality check",
                    // template: "<input id='rating_#=ProductID#' data-bind='value: CustomerRating' class='rating'/>",
                    editable: returnFalse,
                    width: 140
                }, {
                    field: "Failed quality check",
                    title: "Failed quality check",
                    // template: "<div class='k-text-center'><img src='../content/web/country-flags/#:data.Country.CountryNameShort#.png' alt='Kendo UI for jQuery Grid #: data.Country.CountryNameLong# Flag' title='#: data.Country.CountryNameLong#' width='30' /></div>",
                    editor: clientCountryEditor,
                    width: 120
                }, {
                    field: "Location",
                    title: "Location",
                    width: 105
                }, {
                    field: "Items Pending",
                    title: "Items Pending",
                    // format: "{0:c}",
                    width: 140,
                    aggregates: ["sum"],
                },
                ],
            });
        });


        function onDataBound(e) {
            var grid = this;
            grid.table.find("tr").each(function () {
                var dataItem = grid.dataItem(this);
                var themeColor = dataItem.Discontinued ? 'success' : 'error';
                var text = dataItem.Discontinued ? 'available' : 'not available';

                $(this).find(".badgeTemplate").kendoBadge({
                    themeColor: themeColor,
                    text: text,
                });

                $(this).find(".rating").kendoRating({
                    min: 1,
                    max: 5,
                    label: false,
                    selection: "continuous"
                });

                $(this).find(".sparkline-chart").kendoSparkline({
                    legend: {
                        visible: false
                    },
                    data: [dataItem.TargetSales],
                    type: "bar",
                    chartArea: {
                        margin: 0,
                        width: 180,
                        background: "transparent"
                    },
                    seriesDefaults: {
                        labels: {
                            visible: true,
                            format: '{0}%',
                            background: 'none'
                        }
                    },
                    categoryAxis: {
                        majorGridLines: {
                            visible: false
                        },
                        majorTicks: {
                            visible: false
                        }
                    },
                    valueAxis: {
                        type: "numeric",
                        min: 0,
                        max: 130,
                        visible: false,
                        labels: {
                            visible: false
                        },
                        minorTicks: { visible: false },
                        majorGridLines: { visible: false }
                    },
                    tooltip: {
                        visible: false
                    }
                });

                kendo.bind($(this), dataItem);
            });
        }

        function returnFalse() {
            return false;
        }

        function clientCategoryEditor(container, options) {
            $('<input required name="Category">')
                .appendTo(container)
                .kendoDropDownList({
                    autoBind: false,
                    dataTextField: "CategoryName",
                    dataValueField: "CategoryID",
                    dataSource: {
                        data: categories
                    }
                });
        }

        function clientCountryEditor(container, options) {
            $('<input required name="Country">')
                .appendTo(container)
                .kendoDropDownList({
                    dataTextField: "CountryNameLong",
                    dataValueField: "CountryNameShort",
                    template: "<div class='dropdown-country-wrap'><img src='../content/web/country-flags/#:CountryNameShort#.png' alt='Kendo UI for jQuery Grid #: CountryNameLong# Flag' title='#: CountryNameLong#' width='30' /><span>#:CountryNameLong #</span></div>",
                    dataSource: {
                        transport: {
                            read: {
                                url: " https://demos.telerik.com/kendo-ui/service/countries",
                                dataType: "jsonp"
                            }
                        }
                    },
                    autoWidth: true
                });
        }

        var categories = [{
            "CategoryID": 1,
            "CategoryName": "Beverages"
        }, {
            "CategoryID": 2,
            "CategoryName": "Condiments"
        }, {
            "CategoryID": 3,
            "CategoryName": "Confections"
        }, {
            "CategoryID": 4,
            "CategoryName": "Dairy Products"
        }, {
            "CategoryID": 5,
            "CategoryName": "Grains/Cereals"
        }, {
            "CategoryID": 6,
            "CategoryName": "Meat/Poultry"
        }, {
            "CategoryID": 7,
            "CategoryName": "Produce"
        }, {
            "CategoryID": 8,
            "CategoryName": "Seafood"
        }];
    </script>











{{-- <script>
    $(document).ready(function() {

        var data;
       // alert("table");zz
        var settings = {
            "url": "http://127.0.0.1:8001/api/v1/merchant-list",
            "method": "GET",
            "timeout": 0,
        };

        $.ajax(settings).done(function(response) {
            //console.log(response);

console.log('tag', JSON.parse(response));



       var gridDataSource = new kendo.data.DataSource({
          data:  JSON.parse(response));,
          schema: {
            model: {
              fields: {

                name: { type: "name" },
                address: { type: "string" }
              }
            }
          },
          pageSize: 10,
          sort: {
            field: "OrderDate",
            dir: "desc"
          }
        });


        $("#ordersGrid").kendoGrid({
          dataSource: gridDataSource,
          height: 400,
          pageable: true,
          sortable: true,
          filterable: true,
          columns: [{
            field:"name",
            title: "name",
            width: 160
          },  {
            field: "address",
            title: "address"
          }]
        });

            // var table = $('#mytable').DataTable({
            //     dom: 'Bfrtip',
            //     buttons: [
            //         'excel', 'pdf', 'print', 'create'
            //     ],
            //     data: JSON.parse(response),
            //     columns: [{
            //             data: 'name',
            //             title:'name',
            //         },
            //         {
            //             data: 'address',
            //             title:'address'
            //         },

            //     ],

            // });




            data = response;
        });

        // // Add event listener for opening and closing details
        // $('#myTable tbody').on('click', 'td.details-control', function() {
        //     var tr = $(this).closest('tr');
        //     var row = table.row(tr);

        //     if (row.child.isShown()) {
        //         // This row is already open - close it
        //         row.child.hide();
        //         tr.removeClass('shown');
        //     } else {
        //         // Open this row
        //         row.child(format(row.data())).show();
        //         tr.addClass('shown');
        //     }
        // });

        // // Formatting function for row details

        // function format(d) {
        //     return '<table cellpadding="5" cellspacing="0" style="padding-left:50px; border-collapse: collapse; width: 100%;">' +
        //         '<tr>' +
        //         '<th style="border: 1px solid #BE1204; color:#be1204;">Barcode</th>' +
        //         '<th style="border: 1px solid #BE1204;color:#be1204;">Name</th>' +
        //         '<th style="border: 1px solid #BE1204;color:#be1204;">status</th>' +
        //         '<th style="border: 1px solid #BE1204;color:#be1204;">quality check</th>' +
        //         '<th style="border: 1px solid #BE1204;color:#be1204;">Bin Code</th>' +
        //         '</tr>' +
        //         '<tr>' +
        //         '<td style="border: 1px solid black;">123456789</td>' +
        //         '<td style="border: 1px solid black;">Product A</td>' +
        //         '<td style="border: 1px solid black;">In stock</td>' +
        //         '<td style="border: 1px solid black;">Passed</td>' +
        //         '<td style="border: 1px solid black;">A1</td>' +
        //         '</tr>' +
        //         '<tr>' +
        //         '<td style="border: 1px solid black;">987654321</td>' +
        //         '<td style="border: 1px solid black;">Product B</td>' +
        //         '<td style="border: 1px solid black;">Out of stock</td>' +
        //         '<td style="border: 1px solid black;">Failed</td>' +
        //         '<td style="border: 1px solid black;">B2</td>' +
        //         '</tr>' +
        //         '</table>';
        // }

    });
</scrip> --}}
