const path                 = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

const commonConfig = {
  entry: {
    ['public-main']: "./src/ts/public/public-main.ts",
    ['admin-main']: "./src/ts/admin/admin-main.ts",
  },

  output: {
    path: path.resolve( process.cwd(), 'assets/js'),
  },

  resolve: {
    extensions: [ '.tsx', '.ts', '.js' ],
    alias: {
      ASSETS: '/src/assets/',
      SCSS: '/src/scss/',
      APP: '/src/app/',
    },
  },
  
  module: {
    rules: [
      // Loading Images
      {
        test: /\.(png|jpe?g|gif|svg)$/i,
        use: [
          {
            loader: "file-loader",
            options: {
              outputPath: "../images",
            },
          },
        ],
      },
      // Loading Fonts
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        use: {
          loader: "file-loader",
          options: {
            outputPath: "../fonts",
          },
        },
      },
      // Loading TS
      {
        test: /\.tsx?$/,
        use: 'ts-loader',
        exclude: /node_modules/,
      },
      // Loading JS
      {
        test: /\.m?js$/,
        exclude: /(node_modules|bower_components)/,
        use: [
          {
            loader: "babel-loader",
            options: {
              presets: ["@wordpress/default"],
            }
          },
        ]
      },
      // Loading SASS
      {
        test: /\.s[ac]ss$/i,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: 'css-loader',
            options: {
              sourceMap: true,
            }
          },
          'resolve-url-loader',
          {
            loader: 'postcss-loader',
            options: {
              sourceMap: true,
              postcssOptions: {
                path: 'postcss.config.js'
              }
            }
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: true,
            },
          },
        ],
      },
    ],
  },
};

module.exports = commonConfig;