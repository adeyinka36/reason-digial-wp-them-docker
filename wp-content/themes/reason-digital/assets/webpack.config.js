const path  = require('path');

module.exports = {
    entry: './src/js/index.js',
    output:{
        filename: "bundle.js",
        path: path.resolve(__dirname,'./dist'),
    },
    mode: "none",
    module: {
        rules: [
            {
                test: /\.(png|jpg)$/,
                type: 'asset/resource'
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: [ '@babel/env' ],
                        plugins: [ '@babel/plugin-proposal-class-properties']      
                    }
                },
            }
        ]
    }
}