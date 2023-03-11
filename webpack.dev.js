const common               = require("./webpack.common");
const { merge }            = require('webpack-merge');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
// const WebpackRTLPlugin     = require("webpack-rtl-plugin");

const devConfig = {
    mode: "development", // production | development
    plugins: [
      new MiniCssExtractPlugin({
        filename: "../css/[name].css",
      }),
    //   new WebpackRTLPlugin(),
    ],

    optimization: {
        minimize: false
    },

    output: {
      filename: "../js/[name].js",
    },

    devtool: 'source-map'
};

const config = merge( common, devConfig );

module.exports = config;