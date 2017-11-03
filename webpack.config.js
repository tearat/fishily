const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');

const PATHS = {
    source: path.join(__dirname, 'src'),
    build: path.join(__dirname, 'build')
}

module.exports = {
    entry: PATHS.source + '/index.js',
    output: {
        path: PATHS.build,
        filename: 'build.js'
    },
    plugins: [
        new HtmlWebpackPlugin({
            template: PATHS.source + '/index.html'
        })
    ],
    module: {
        rules: [
            { test: /\.js$/, loader: 'babel-loader', exclude: /node_modules/ },
            { test: /\.vue$/, loader: 'vue-loader' },
            { test: /\.css$/, loader: "style-loader!css-loader!less-loader" },
            { test: /\.less$/, loader: "style-loader!css-loader!less-loader" },
            { test: /\.pug$/, loader: 'pug-loader' },
            { test: /\.(png|jpg|gif)$/, loader: 'file-loader' }
        ]
    },
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.common.js'
        }
      }
};