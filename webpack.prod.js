const { merge } = require("webpack-merge");
const common = require("./webpack.common");

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
// const WebpackRTLPlugin = require("webpack-rtl-plugin");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const FileManagerPlugin = require("filemanager-webpack-plugin");

const appSlug = "mobile-app-maker";

const prodConfig = {
  mode: "production", // production | development
  plugins: [
    new MiniCssExtractPlugin({
      filename: "../css/[name].min.css",
    }),
    // new WebpackRTLPlugin({ minify: true }),
    new CleanWebpackPlugin({
      dry: false,
      cleanOnceBeforeBuildPatterns: ["../css/*.map", "../js/*.map"],
      dangerouslyAllowCleanPatternsOutsideProject: true,
    }),
    new FileManagerPlugin({
      events: {
        onEnd: [
          {
            delete: ['./__build'],
          },
          {
            copy: [
              {
                source: "./app",
                destination: `./__build/${appSlug}/${appSlug}/app`,
              },
              {
                source: "./assets",
                destination: `./__build/${appSlug}/${appSlug}/assets`,
              },
              {
                source: "./helper",
                destination: `./__build/${appSlug}/${appSlug}/helper`,
              },
              {
                source: "./languages",
                destination: `./__build/${appSlug}/${appSlug}/languages`,
              },
              {
                source: "./template",
                destination: `./__build/${appSlug}/${appSlug}/template`,
              },
              {
                source: "./vendor",
                destination: `./__build/${appSlug}/${appSlug}/vendor`,
              },
              {
                source: "./view",
                destination: `./__build/${appSlug}/${appSlug}/view`,
              },
              {
                source: "./*.php",
                destination: `./__build/${appSlug}/${appSlug}`,
              },
            ],
          },
          {
            delete: [`./__build/${appSlug}/${appSlug}/src`],
          },
          {
            archive: [
              {
                source: `./__build/${appSlug}`, destination: `./__build/${appSlug}.zip`,
              },
            ],
          },
          {
            delete: [`./__build/${appSlug}`],
          },
        ],
      },
    }),
  ],

  optimization: {
    minimize: true,
  },

  output: {
    filename: "../js/[name].min.js",
  },
};

// Production Build
const config = merge(common, prodConfig);

module.exports = config;
