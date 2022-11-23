const homePage = (request, h) => {
  const response = h.response({
    status: 'Success',
    message: 'Halaman home',
    code: 200,
    data: {
      // ${user}
    },
  });

  return response;
};

const explorePage = (request, h) => {
  const response = h.response({
    status: 'Success',
    message: 'Halaman Explore',
    code: 200,
    data: {
      // ${user}
    },
  });

  return response;
};

const servicePage = (requets, h) => {
  const response = h.response({
    status: 'Success',
    message: 'Halaman Service',
    code: 200,
    data: {
      // ${user}
    },
  });

  return response;
};

export { homePage, explorePage, servicePage };
