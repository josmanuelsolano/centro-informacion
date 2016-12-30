
    var chart_config = {
        chart: {
            container: "#organigrama",

            animateOnInit: true,

            node: {
                collapsable: true
            },
            animation: {
                nodeAnimation: "easeOutBounce",
                nodeSpeed: 700,
                connectorsAnimation: "bounce",
                connectorsSpeed: 700
            }
        },
        nodeStructure: {
            text: {
            title: "Jefatura del Centro de Información"
            },
            children: [
                {
                    text: {
                      title: "Comité de Apoyo"
                    },
                },

                {
                    text: {
                      title: "Oficina de Organización Bibliográfica"
                    },

                    collapsed: true,
                    children: [
                        {
                            text: {
                            title: "Desarrollo de Colecciones"
                        },
                    },

                        {
                            text: {
                            title: "Investigación Bibliográfica"
                        },
                    },

                        {
                            text: {
                            title: "Procesos Físicos"
                        },
                    }
                    ]
                },

                {
                    text: {
                    title: "Oficina de Servicio a los Usuarios"
                },

                    collapsed: true,
                    children: [
                        {
                            text: {
                            title: "Circulación"
                        },
                    },

                        {
                            text: {
                            title: "Consulta"
                        },
                    },

                         {
                            text: {
                            title: "Hemeroteca"
                        },
                    }
                    ]
                },

                {
                    text: {
                    title: "Oficina de Servicios Especializados"
                    },

                    collapsed: true,
                    children: [
                        {
                            text: {
                            title: "Mediateca"
                        },
                    },

                        {
                            text: {
                            title: "Servicios Vituales"
                        },
                    },

                        {
                            text: {
                            title: "Diseminación Selectiva"
                        },
                    },

                        {
                            text: {
                            title: "Reprografía"
                        },
                    },


                    ]
                },
            ]
        }
    };
