<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Page Forum</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div id="app">
        <v-app>
            <div class="text-center">
                <v-btn
                    class="mx-2"
                    fab
                    dark
                    small
                    color="primary"
                >
                    <v-icon dark>
                        mdi-minus
                    </v-icon>
                </v-btn>

                <v-btn
                    class="mx-2"
                    fab
                    dark
                    small
                    color="pink"
                >
                    <v-icon dark>
                        mdi-heart
                    </v-icon>
                </v-btn>

                <v-btn
                    class="mx-2"
                    fab
                    dark
                    color="indigo"
                >
                    <v-icon dark>
                        mdi-plus
                    </v-icon>
                </v-btn>

                <v-btn
                    class="mx-2"
                    fab
                    dark
                    color="teal"
                >
                    <v-icon dark>
                        mdi-format-list-bulleted-square
                    </v-icon>
                </v-btn>

                <v-btn
                    class="mx-2"
                    fab
                    dark
                    large
                    color="cyan"
                >
                    <v-icon dark>
                        mdi-pencil
                    </v-icon>
                </v-btn>

                <v-btn
                    class="mx-2"
                    fab
                    dark
                    large
                    color="purple"
                >
                    <v-icon dark>
                        mdi-android
                    </v-icon>
                </v-btn>
            </div>
            <example-component>hello</example-component>
        </v-app>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
