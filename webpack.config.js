const webpack = require('webpack');

module.exports = (env, argv) => {
  const config = {
    entry: './src/js/',
    output: {
      path: __dirname,
      publicPath: '/',
      filename: 'src/script.js',
    },
    plugins: [
      new webpack.SourceMapDevToolPlugin({
        filename: 'src/script.js.map',
      }),
    ],
    module: {
      rules: [
        {
          test: /\.(js)$/,
          exclude: /node_modules/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: ['@babel/preset-env'],
            },
          },
        },
      ],
    },
  };
  return config;
};
